# [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
# JParser
> A Simple BBCode To HTML Parser Class :)
```php
Usage

require 'Parser.php';
$parser = new Parser\JParser;
$output = $parser->parse2html($input);
echo $output;
```
> Example:
```php
require 'Parser.php';
$parser = new Parser\JParser;
$output = $parser->parse2html([b]Hello JParser ![/b]);
echo $output;
```
> The above code will output the following :
```html
<b>Hello JParser !</b>
```
## Steps to add custom BBCode Tags
```php
require 'Parser.php';
$parser = new Parser\JParser;
$custom_tags = ['[custom]' => '<pre>', '[/custom]' => '</pre>'];//You can pass as many values as you want applicable to this format only
$parser->add_tags($custom_tags);//Adding custom BBCode Tags
$output = $parser->parse2html([custom]Hello JParser ![/custom]);
echo $output;
```
> The above code will output the following :
```html
<pre>Hello JParser !</pre>
```
___
## Status of JParser
> Maintained

> You will get response to your pull request within 48 hours.
___
