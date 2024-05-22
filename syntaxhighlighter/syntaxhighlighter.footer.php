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

require_once cot_incfile('syntaxhighlighter', 'plug');

$shTheme = !empty(Cot::$cfg['plugin']['syntaxhighlighter']['theme']) ? Cot::$cfg['plugin']['syntaxhighlighter']['theme'] : 'default';

/* === Hook === */
foreach (cot_getextplugins('syntaxhighlighter.footer') as $pl)
{
	include $pl;
}
/* ===== */

$shThemeUrl = shlThemeCssUrl($shTheme);
$shCoreJs = Cot::$cfg['plugins_dir'] . '/syntaxhighlighter/lib/syntaxhighlighter.js';
$startJs = Cot::$cfg['plugins_dir'] . '/syntaxhighlighter/js/start.js';

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
    let startScript = document.createElement('script');
    startScript.async = true;
    startScript.src ='$startJs';
    document.body.appendChild(startScript);

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
