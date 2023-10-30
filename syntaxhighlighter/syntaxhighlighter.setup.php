<?php
/* ====================
[BEGIN_COT_EXT]
Code=syntaxhighlighter
Name=Syntax Highlighter
Description=Client side code highlighter
Version=1.3.0-4.0.1
Date=2023-10-30
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
autoLinks=02:radio::1:Auto links
className=03:string:::Code element class name
gutter=04:radio::1:Gutter
smartTabs=05:radio::1:Smart tabs
tabSize=06:string::4:Tab size
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
 */

defined('COT_CODE') or die('Wrong URL');

