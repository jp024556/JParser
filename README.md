# [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
# JParser
> A Simple BBCode To HTML Parser Class :)
```php
Usage

$parser = new JParser;
$output = $parser->parse2html($input);
echo $output;
```
> Example:
```php
$parser = new JParser;
$output = $parser->parse2html([b]Hello JParser ![/b]);
echo $output;
```
> The above code will output the following :
```html
<b>Hello JParser !</b>
```
