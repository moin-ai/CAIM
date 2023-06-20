<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_login
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Router\Route;

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $app->getDocument()->getWebAssetManager();
$wa->registerAndUseStyle('mod_login', 'system/joomla-fontawesome.min.css');

$app->getDocument()->getWebAssetManager()
    ->useScript('core')
    ->useScript('keepalive')
    ->useScript('field.passwordview');

Text::script('JSHOWPASSWORD');
Text::script('JHIDEPASSWORD');
?>
<form id="login-form-<?php echo $module->id; ?>" class="mod-login" action="<?php echo Route::_('index.php', true); ?>" method="post">

    <?php if ($params->get('pretext')) : ?>
        <div class="jl-margin">
            <p><?php echo $params->get('pretext'); ?></p>
        </div>
    <?php endif; ?>

    <div class="mod-login__userdata userdata">
        <div class="jl-margin">
            <?php if (!$params->get('usetext', 0)) : ?>
                <div class="jl-inline w-100">
                    <input type="text" name="username" class="jl-input" autocomplete="username" placeholder="<?php echo Text::_('MOD_LOGIN_VALUE_USERNAME'); ?>">
                    <label for="modlgn-username-<?php echo $module->id; ?>" class="visually-hidden"><?php echo Text::_('MOD_LOGIN_VALUE_USERNAME'); ?></label>
                    <span class="jl-form-icon jl-form-icon-flip" title="<?php echo Text::_('MOD_LOGIN_VALUE_USERNAME'); ?>">
                        <span class="icon-user icon-fw" aria-hidden="true"></span>
                    </span>
                </div>
            <?php else : ?>
                <label for="modlgn-username-<?php echo $module->id; ?>"><?php echo Text::_('MOD_LOGIN_VALUE_USERNAME'); ?></label>
                <input type="text" name="username" class="jl-input" autocomplete="username" placeholder="<?php echo Text::_('MOD_LOGIN_VALUE_USERNAME'); ?>">
            <?php endif; ?>
        </div>

        <div class="jl-margin">
            <?php if (!$params->get('usetext', 0)) : ?>
                <div class="jl-inline w-100">
                    <input type="password" name="password" autocomplete="current-password" class="jl-input" placeholder="<?php echo Text::_('JGLOBAL_PASSWORD'); ?>">
                    <label for="modlgn-passwd-<?php echo $module->id; ?>" class="visually-hidden"><?php echo Text::_('JGLOBAL_PASSWORD'); ?></label>
                    <button type="button" class="jl-form-icon jl-form-icon-flip input-password-toggle">
                        <span class="icon-eye icon-fw" aria-hidden="true"></span>
                        <span class="visually-hidden"><?php echo Text::_('JSHOWPASSWORD'); ?></span>
                    </button>
                </div>
            <?php else : ?>
                <label for="modlgn-passwd-<?php echo $module->id; ?>"><?php echo Text::_('JGLOBAL_PASSWORD'); ?></label>
                <input type="password" name="password" autocomplete="current-password" class="jl-input" placeholder="<?php echo Text::_('JGLOBAL_PASSWORD'); ?>">
            <?php endif; ?>
        </div>

        <?php if (PluginHelper::isEnabled('system', 'remember')) : ?>
            <div class="jl-margin">
                <label>
                    <input type="checkbox" name="remember" class="jl-checkbox" value="yes">
                    <?php echo Text::_('MOD_LOGIN_REMEMBER_ME'); ?>
                </label>
            </div>
        <?php endif; ?>

        <?php foreach ($extraButtons as $button) :
            $dataAttributeKeys = array_filter(array_keys($button), function ($key) {
                return substr($key, 0, 5) == 'data-';
            });
            ?>
            <div class="mod-login__submit form-group">
                <button type="button"
                        class="jl-button jl-button-secondary <?php echo $button['class'] ?? '' ?>"
                        <?php foreach ($dataAttributeKeys as $key) : ?>
                            <?php echo $key ?>="<?php echo $button[$key] ?>"
                        <?php endforeach; ?>
                        <?php if ($button['onclick']) : ?>
                        onclick="<?php echo $button['onclick'] ?>"
                        <?php endif; ?>
                        title="<?php echo Text::_($button['label']) ?>"
                        id="<?php echo $button['id'] ?>"
                        >
                    <?php if (!empty($button['icon'])) : ?>
                        <span class="<?php echo $button['icon'] ?>"></span>
                    <?php elseif (!empty($button['image'])) : ?>
                        <?php echo $button['image']; ?>
                    <?php elseif (!empty($button['svg'])) : ?>
                        <?php echo $button['svg']; ?>
                    <?php endif; ?>
                    <?php echo Text::_($button['label']) ?>
                </button>
            </div>
        <?php endforeach; ?>

        <div class="jl-margin">
            <button type="submit" name="Submit" class="jl-button jl-button-primary"><?php echo Text::_('JLOGIN'); ?></button>
        </div>

        <?php
            $usersConfig = ComponentHelper::getParams('com_users'); ?>
            <ul class="jl-list jl-margin-remove-bottom">
                <li>
                    <a href="<?php echo Route::_('index.php?option=com_users&view=reset'); ?>">
                    <?php echo Text::_('MOD_LOGIN_FORGOT_YOUR_PASSWORD'); ?></a>
                </li>
                <li>
                    <a href="<?php echo Route::_('index.php?option=com_users&view=remind'); ?>">
                    <?php echo Text::_('MOD_LOGIN_FORGOT_YOUR_USERNAME'); ?></a>
                </li>
                <?php if ($usersConfig->get('allowUserRegistration')) : ?>
                <li>
                    <a href="<?php echo Route::_($registerLink); ?>">
                    <?php echo Text::_('MOD_LOGIN_REGISTER'); ?> <span class="icon-register" aria-hidden="true"></span></a>
                </li>
                <?php endif; ?>
            </ul>
        <input type="hidden" name="option" value="com_users">
        <input type="hidden" name="task" value="user.login">
        <input type="hidden" name="return" value="<?php echo $return; ?>">
        <?php echo HTMLHelper::_('form.token'); ?>
    </div>
    <?php if ($params->get('posttext')) : ?>
        <div class="mod-login__posttext posttext">
            <p><?php echo $params->get('posttext'); ?></p>
        </div>
    <?php endif; ?>
</form>
