<?php defined('_JEXEC') or die;
/*
 * @package     mod_uk_grid
 * @copyright   Copyright (C) 2019 Aleksey A. Morozov (AlekVolsk). All rights reserved.
 * @license     GNU General Public License version 3 or later; see http://www.gnu.org/licenses/gpl-3.0.txt
 */

?>

<div class="mod_uk_grid<?php echo $grid_class, $classes; ?>" data-uk-grid<?php echo $grid_params, $hm_param; ?>>
    <?php
    foreach ($items as $item)
    {
        $item_add_class = trim($item->class) ? ' ' . trim($item->class) : '';
        $item_class = $item_class || $item_add_class ? ' class="' . $item_class . $item_add_class . '"' : '';
    ?>
    <div>
        <div<?php echo $item_class; ?>>
            <?php if ($item->img) { ?>
            <div class="<?php echo $item->al_img; ?>"><img src="<?php echo $item->img; ?>" alt="<?php echo $item->title; ?>"></div>
            <?php } ?>
            
            <?php if ($item->title) { ?>
            <h3 class="<?php echo $item->al_title; ?>"><?php echo $item->title; ?></h3>
            <?php } ?>
            
            <?php if ($item->content) { ?>
            <div class="<?php echo $item->al_content; ?>"><?php echo $item->content; ?></div>
            <?php } ?>
            
            <?php if ($item->link) { ?>
            <div class="uk-margin-small-top<?php echo trim(' ' . $item->al_content); ?>"><a class="uk-button uk-button-primary" href="<?php echo $item->link; ?>"><?php echo $item->link_text; ?></a></div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</div>
