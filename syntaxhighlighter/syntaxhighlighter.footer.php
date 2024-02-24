<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=footer.first
[END_COT_EXT]
==================== */

/**
 * SyntaxHighlighter connector for Cotonti
 *
 * @package syntaxhighligther
 */

defined('COT_CODE') or die('Wrong URL');

$shTheme = !empty(Cot::$cfg['plugin']['syntaxhighlighter']['theme']) ? Cot::$cfg['plugin']['syntaxhighlighter']['theme'] : 'default';

/**
 * Returns full path to theme css file
 * Allowing override it with user custom css file located in `themes/themename/styles` folder
 *
 * @param string $chTheme Theme name (without prefix)
 * @return string Full path to theme css file
 */
function shlThemeCssUrl($chTheme = 'default')
{
	$cssFile = Cot::$cfg['themes_dir'] . '/' . Cot::$cfg['defaulttheme'] . '/styles/syntaxhighlighter-' . $chTheme . '.css';
	if (is_file($cssFile)) {
        return $cssFile;
    }

    $cssFile = Cot::$cfg['plugins_dir'] . '/syntaxhighlighter/lib/theme-' . $chTheme . '.css';
	if (is_file($cssFile)) {
        return $cssFile;
    }
	return Cot::$cfg['plugins_dir'] . '/syntaxhighlighter/lib/theme-default.css';
}

$shThemeUrl = shlThemeCssUrl($shTheme);
$shCoreJs = Cot::$cfg['plugins_dir'] . '/syntaxhighlighter/lib/syntaxhighlighter.js';
$prepareJs = Cot::$cfg['plugins_dir'] . '/syntaxhighlighter/js/prepare.js';

$shAutoLinks = (bool) Cot::$cfg['plugin']['syntaxhighlighter']['autoLinks'];
$shAutoLinks = $shAutoLinks ? 'true' : 'false';

$shClassName = !empty(Cot::$cfg['plugin']['syntaxhighlighter']['className'])
    ? "'" . Cot::$cfg['plugin']['syntaxhighlighter']['className'] . "'"
    : 'null';

$shGutter = (bool) Cot::$cfg['plugin']['syntaxhighlighter']['gutter'];
$shGutter = $shGutter ? 'true' : 'false';

$shSmartTabs = (bool) Cot::$cfg['plugin']['syntaxhighlighter']['smartTabs'];
$shSmartTabs = $shSmartTabs ? 'true' : 'false';

$shTabSize = !empty(Cot::$cfg['plugin']['syntaxhighlighter']['tabSize']) ? (int) Cot::$cfg['plugin']['syntaxhighlighter']['tabSize'] : 4;

Resources::embedFooter(<<<JS
let codeBlocks = document.querySelectorAll('pre[class*="brush"]');
if (codeBlocks.length > 0) {
    let head  = document.getElementsByTagName('head')[0];
    ['{$shThemeUrl}', 'plugins/syntaxhighlighter/lib/override.css'].forEach((item) => {
        let shLink = document.createElement('link');
        shLink.rel  = 'stylesheet';
        shLink.type = 'text/css';
        shLink.href = item;
        head.appendChild(shLink);
    }); 
    
    shPrepareConfig = {
        theme: '$shTheme',
        coreScript: '$shCoreJs'
    };
    let prepareScript = document.createElement('script');
    prepareScript.async = true;
    prepareScript.src ='$prepareJs';
    document.body.appendChild(prepareScript);
        
    syntaxhighlighterConfig = {
        autoLinks: {$shAutoLinks},
        className: {$shClassName},
        gutter: {$shGutter},
        smartTabs: {$shSmartTabs},
        tabSize: {$shTabSize}
    };
}
JS
);

