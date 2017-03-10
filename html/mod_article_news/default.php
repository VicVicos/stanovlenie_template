<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_news
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
var_dump('test');
?>
<div class="newsflash<?php echo $moduleclass_sfx; ?>">
<?php if(count($list)):?>
<ul class="newsflash<?php echo $params->get('moduleclass_sfx'); ?>">
<?php foreach ($list as $item) :?>
	<li class="newsflash<?php echo $params->get('moduleclass_sfx'); ?>">
	<?php
	 require JModuleHelper::getLayoutPath('mod_articles_news', '_item');?>
	 </li>
<?php endforeach; ?>
</ul>
<? endif;?>
</div>
<?php
	if ($params->get('allnews')&& $params->get('allnewstext'))
	{
		echo '<div class="allnews_link"><a href="'.$params->get('allnews').'">'.$params->get('allnewstext').'</a></div>';
	}
?>