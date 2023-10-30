<?php
/**
 * SyntaxHighlighter connector for Cotonti
 *
 * @package syntaxhighligther
 */

defined('COT_CODE') or die('Wrong URL');

/**
 * Returns list of available color themes for Syntax highlighter
 */
function shlGetThemes()
{
	$prefix = 'theme-';
	$themes = [];
	$filesDefault = glob(Cot::$cfg['plugins_dir'] . '/syntaxhighlighter/lib/' . $prefix . '*.css');
	$filesCustom = glob(Cot::$cfg['themes_dir'] . '/' . Cot::$cfg['defaulttheme'] . '/styles/syntaxhighlighter-*.css');
	$files = array_merge($filesDefault, $filesCustom);
	foreach ($files as $path) {
		$fname = pathinfo($path, PATHINFO_BASENAME);
		$themename = preg_replace("/$prefix(.*)\.css/i", '$1', $fname);
		if ($themename) {
            $themes[] = $themename;
        }
	}
	sort($themes);
	return array_unique($themes);
}