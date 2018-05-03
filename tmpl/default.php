<?php defined('_JEXEC') or die; ?>

<div class="mod_uk_grid<?php echo $moduleclass_sfx; ?> <?php echo $classes; ?>" data-uk-grid<?php echo $grid_params, $hm_param; ?>>
    <?php
    foreach ($items as $item)
    {
        $item_class = trim($tile_class . ' ' . $item->class);
    ?>
    <div>
        <div<?php echo ($item_class ? ' class="' . $item_class . '"' : ''); ?>>
            <?php if ($item->img_front) { ?>
            <div class="<?php echo $item->al_img; ?>"><img src="<?php echo $item->img_front; ?>" alt="<?php echo $item->title; ?>"></div>
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
