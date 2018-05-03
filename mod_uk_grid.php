<?php defined('_JEXEC') or die;

$vars = [
    'moduleclass_sfx', 
    'tile_class', 'margin_class', 'first_column_class', 'height_match', 'height_match_class', 
    'grid', 'grid_divider', 'grid_center', 'cols', 'cols_all', 'cols_s', 'cols_m', 'cols_l', 'cols_xl',
    'items'
];
foreach ($vars as $var)
    $$var = $params->get($var);

$grid_params = [];
if ($margin_class) $grid_params[] = 'margin_class:.' . $margin_class;
if ($first_column_class) $first_column_class[] = 'margin_class:.' . $first_column_class;
$grid_params = $grid_params ? '="' . implode(';', $grid_params) . '"' : '';

$hm_param = '';
if ((int)$height_match && $height_match_class) $hm_param = ' uk-height-match="target:' . $height_match_class . '"';

$classes = [];
if ($grid != '')
{
    $classes[] = $grid;
    if ((int)$grid_divider) $classes[] = 'uk-grid-divider';
    if ((int)$grid_center) $classes[] = 'uk-flex-center';
}
if ((int)$cols)
{
    $classes[] = $cols_all;
    $classes[] = $cols_s;
    $classes[] = $cols_m;
    $classes[] = $cols_l;
    $classes[] = $cols_xl;
}
if ((int)$height_match && !$height_match_class) $classes[] = 'uk-grid-match';
$classes = $classes ? ' ' . implode(' ', $classes) : '';

require(JModuleHelper::getLayoutPath('mod_uk_grid', $params->get('layout', 'default')));