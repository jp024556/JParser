# JParser
> A Simple BBCode To HTML Parser Class :)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
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
//You can pass as many values as you want as an array applicable to the following format only
$custom_tags = ['[custom]' => '<pre>', '[/custom]' => '</pre>'];
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

> If you like my work then [donate](https://www.paypal.me/jp024556) some bucks to keep me going in future.
___
