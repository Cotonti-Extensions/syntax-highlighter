Syntaxhig Hlighter
=================

Plugin for [Cotonti](https://www.cotonti.com) CMF. Client side code highlighter
This is ready-to-use Cotonti port of 
[SyntaxHighligher](https://github.com/syntaxhighlighter/syntaxhighlighter) by Alex Gorbatchev.

Authors:

## Installation

1. Install the plugin.
2. Make sure {FOOTER_RC} tag is present in your theme's footer.tpl.
3. Select any color theme in plugin settings if you need

## Usage

Usage with HTML parsing:
To highlight source code with some specific language, use HTML tags like this:
```
<pre class="brush:language;">
Your code here
</pre>
```

The list of available brushes: http://alexgorbatchev.com/SyntaxHighlighter/manual/brushes/

Plugin for CKEditor: http://code.google.com/p/ckeditor-syntaxhighlight/

## Color themes

Plugin bundled with a pack of [predefined color themes](http://alexgorbatchev.com/SyntaxHighlighter/manual/themes/).
But you can adjust some of it to suit you needs with Cotonti theme colors. To do that copy theme CSS file from
`syntaxhighlighter/lib/styles` folder to your theme sub folder named `styles` — `themes/themename/styles`.
Now you can change it for your needs or create your own. All CSS files located in `themes/themename/styles` folder
override default ones with same names.

