<?php
/**
 * English Language File for Syntax Highlighter plugin
 *
 * @package syntaxhighligther
 */

defined('COT_CODE') or die('Wrong URL.');

$L['info_desc'] = 'Client side code highlighter';

/**
 * Plugin Config
 */

$L['cfg_theme'] = 'Highlight color theme';
$L['cfg_theme_hint'] = 'You can add your custom theme to: ' . Cot::$cfg['themes_dir'] . '/' . Cot::$cfg['defaulttheme']
    . '/styles/syntaxhighlighter-themeName.css';
$L['cfg_autoLinks'] = 'Auto links';
$L['cfg_autoLinks_hint'] = '(Default yes) - Allows you to turn detection of links in the highlighted element on and off. '
    . 'If the option is turned off, URLs won’t be clickable';
$L['cfg_className'] = 'Code element class name';
$L['cfg_className_hint'] = '(Default empty) - Allows you to add a custom class (or multiple classes) to every highlighter element that will be'
    . ' created on the page';
$L['cfg_gutter'] = 'Gutter';
$L['cfg_gutter_hint'] = '(Default yes) - Allows you to turn gutter with line numbers on and off';
$L['cfg_smartTabs'] = 'Smart tabs';
$L['cfg_smartTabs_hint'] = '(Default yes) - Allows you to turn smart tabs feature on and off';
$L['cfg_tabSize'] = 'Tab size';
$L['cfg_tabSize_hint'] = '(Default 4) - Allows you to adjust tab size';