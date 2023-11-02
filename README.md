Syntaxhig Hlighter
=================

Plugin for [Cotonti](https://www.cotonti.com) CMF. Client side code highlighter
This is ready-to-use Cotonti port of 
[SyntaxHighligher](https://github.com/syntaxhighlighter/syntaxhighlighter) by Alex Gorbatchev.

Authors: 
- SyntaxHighlighter: [Alex Gorbatchev](https://github.com/alexgorbatchev)
- Cotonti plugin: [Vladimir Sibirov](https://github.com/trustmaster) ([Trustmaster](https://www.cotonti.com/users/Trustmaster))
- Cotonti plugin: [Alexey Kalnov](https://github.com/Alex300) ([Alex300](https://www.cotonti.com/users/Alex300))
   
## Installation

- Download the plugin and extract "**syntaxhighlighter**" folder into your Cotonti plugins folder.
- Go to Administration / Extensions and install the **SyntaxHighlighter** plugin.
- Go to the plugin configuration and select the desired theme and set other options if you need
  
## Usage

Usage with HTML parsing:
To highlight source code with some specific language, use HTML tags like this:
```
<pre class="brush:language;">
Your code here
</pre>
```

The list of available brushes and themes: 
[http://alexgorbatchev.com/SyntaxHighlighter/manual/brushes/](https://github.com/syntaxhighlighter/syntaxhighlighter/wiki/Brushes-and-Themes)

Plugin for CKEditor: https://ckeditor.com/cke4/addon/syntaxhighlight, https://github.com/dbrain/ckeditor-syntaxhighlight

## Color themes

Plugin bundled with a pack of [predefined color themes](https://github.com/syntaxhighlighter/syntaxhighlighter/wiki/Brushes-and-Themes#official-themes).
But you can adjust some of it to suit you needs with Cotonti theme colors. To do that copy theme CSS file from
`syntaxhighlighter/lib/` folder to your theme sub folder named `styles` — `themes/theme-name/styles`.
File name shoud have prefix `syntaxhighlighter-`. For example custom theme file full name can be like this: 
`themes/theme-name/styles/syntaxhighlighter-my-awesome-theme.css`.  
Now you can change it for your needs or create your own. All CSS files located in `themes/theme-name/styles` folder
override default ones with same names.

## Examples

<img width="640" alt="SyntaxHighlighter" src="https://github.com/Cotonti-Extensions/syntax-highlighter/assets/1021886/5c5e83ff-699d-4228-b13b-0eddc336038f">


![SyntaxHighlighter_theme-cotonti](https://github.com/Cotonti-Extensions/syntax-highlighter/assets/1021886/1d09bca1-618c-49bd-a47f-d5160e04bc88)
