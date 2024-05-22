<?php
/* ====================
[BEGIN_COT_EXT]
Code=syntaxhighlighter
Name=Syntax Highlighter
Description=Client side code highlighter
Version=1.3.2-4.0.1
Date=2024-05-22
Author=Alex Gorbatchev https://github.com/alexgorbatchev, Vladimir Sibirov (Trustmaster), https://github.com/trustmaster, Alexey Kalnov https://github.com/Alex300
Copyright=(c) Alex Gorbatchev, 2011-2015 Vladimir Sibirov,  2023 Lily Software https://lily-software.com
Notes=
SQL=
Auth_guests=R
Lock_guests=W12345A
Auth_members=RW
Lock_members=12345A
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
theme=01:callback:shlGetThemes():default:Highlight color theme
className=03:string:::Code element class name
loadCommonCss=05:radio::1:Load common CSS
autoLinks=07:radio::1:Auto links
gutter=09:radio::1:Gutter
smartTabs=11:radio::1:Smart tabs
tabSize=13:string::4:Tab size
[END_COT_EXT_CONFIG]
==================== */

/**
 * SyntaxHighlighter connector for Cotonti
 *
 * @package syntaxhighligther
 * @author Alex Gorbatchev https://github.com/alexgorbatchev
 * @author Vladimir Sibirov (Trustmaster), https://github.com/trustmaster
 * @author Alexey Kalnov https://github.com/Alex300, kalnovalexey@yandex.ru
 * @author Cotonti theme by Macik https://github.com/macik
 * @copyright Alex Gorbatchev
 * @copyright 2011-2015 Vladimir Sibirov (Trustmaster)
 * @copyright 2023 Alexey Kalnov, Lily Software https://lily-software.com
 *
 * https://github.com/syntaxhighlighter/syntaxhighlighter
 *
 * Custom brushes
 * https://github.com/aerodynamica/brush-halcon,halcon,brush.js
 * https://github.com/nu-soft/brush-IEC61131,IEC61131,brush.js
 * https://github.com/ethauvin/brush-kotlin,kotlin,brush.js
 * https://github.com/ErikWegner/brush-latex,latex,brush.js
 * https://github.com/p--q/brush-Makefile,Makefile,brush.js
 * https://github.com/npedotnet/syntaxhighlighter-brush-mel,mel,brush.js
 * https://github.com/dingxin/brush-objective-c,objective-c,brush.js
 * https://github.com/ErikWegner/brush-yaml,yaml,brush.js
 */

defined('COT_CODE') or die('Wrong URL');

