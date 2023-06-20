<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   (C) 2009 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;

/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
$wa = $this->document->getWebAssetManager();
$wa->useScript('keepalive')
    ->useScript('form.validate');

?>
<div class="com-users-registration registration jl-flex jl-flex-center">
    <div class="jl-width-large jl-card jl-card-default jl-card-body jl-margin-remove-first-child">
        <?php if ($this->params->get('show_page_heading')) : ?>
            <div class="page-header">
                <h1 class="jl-margin-remove jl-h3"><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
            </div>
        <?php endif; ?>

        <form id="member-registration" action="<?php echo Route::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="com-users-registration__form form-validate" enctype="multipart/form-data">
            <?php // Iterate through the form fieldsets and display each one. ?>
            <?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
                <?php $fields = $this->form->getFieldset($fieldset->name); ?>
                <?php if (count($fields)) : ?>
                    <fieldset class="jl-fieldset">
                        <?php // If the fieldset has a label set, display it as the legend. ?>
                        <?php if (isset($fieldset->label)) : ?>
                            <legend class="jl-legend"><?php echo Text::_($fieldset->label); ?></legend>
                        <?php endif; ?>
                        <?php echo $this->form->renderFieldset($fieldset->name); ?>
                    </fieldset>
                <?php endif; ?>
            <?php endforeach; ?>
            <div class="com-users-registration__submit control-group">
                <div class="controls">
                    <button type="submit" class="com-users-registration__register jl-button jl-button-secondary validate">
                        <?php echo Text::_('JREGISTER'); ?>
                    </button>
                    <input type="hidden" name="option" value="com_users">
                    <input type="hidden" name="task" value="registration.register">
                </div>
            </div>
            <?php echo HTMLHelper::_('form.token'); ?>
        </form>
    </div>
</div>
