<?php
/**
* SyntaxHighlighter connector for Cotonti
*
* @package syntaxhighligther
*/

defined('COT_CODE') or die('Wrong URL');

/**
 * @return list<string> List of available color themes for Syntax highlighter
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

/**
* Returns full path to theme css file
* Allowing override it with user custom css file located in `themes/<theme_name>/styles` folder
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
