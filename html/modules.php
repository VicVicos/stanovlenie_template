<?php
defined( '_JEXEC' ) or die;

// Модуль пустышка
function modChrome_module_space($module, &$params, $attribs) {
    // $module - Параметры модуля
    // &$params - Параметры с вкладки "Доп параметры"
    // $attribs - (position, style)
    //
    if($module->content) {
        echo $module->content;
    }
}

function modChrome_module_empty($module, &$params, $attribs) {
    echo "<div class='" . $params->get('moduleclass_sfx') . "'>";
    if($module->showtitle == 1) {
        echo '<h2 class="' . $params->get('header_class') . '">' . $module->title . '</h2>';
    }
    if($module->content) {
        echo $module->content;
    }
    echo "</div>";
}
