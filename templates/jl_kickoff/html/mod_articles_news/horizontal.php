<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

if (empty($list))
{
	return;
}

?>

<div class="mod-articlesnews-horizontal newsflash-horiz jl-child-width-1-1 jl-grid-medium jl-grid-divider jl-grid-match" jl-grid>
	<?php foreach ($list as $item) : ?>
		<div itemscope itemtype="https://schema.org/Article">
			<?php require ModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>
		</div>
	<?php endforeach; ?>
</div>
