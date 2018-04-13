<?php
	class JParser{		
		public $parsed;		
		public function parse2html($input){
			$this->parsed = strip_tags($input);
			$this->parsed = preg_replace('/\[b\](.*?)\[\/b\]/s', '<b>$1</b>', $this->parsed);
			$this->parsed = preg_replace('/\[i\](.*?)\[\/i\]/s', '<i>$1</i>', $this->parsed);
			$this->parsed = preg_replace('/\[u\](.*?)\[\/u\]/s', '<u>$1</u>', $this->parsed);
			$this->parsed = preg_replace('/\[s\](.*?)\[\/s\]/s', '<s>$1</s>', $this->parsed);
			$this->parsed = preg_replace('/\[quote\](.*?)\[\/quote\]/s', '<blockquote>$1</blockquote>', $this->parsed);
			$this->parsed = preg_replace('/\[url\](.*?)\[\/url\]/s', '<a href="$1">$1</a>', $this->parsed);
			$this->parsed = preg_replace('/\[url\=(.*?)\](.*?)\[\/url\]/s', '<a href="$1">$2</a>', $this->parsed);
			$this->parsed = preg_replace('/\[img\](.*?)\[\/img\]/s', '<img src="$1">', $this->parsed);
			$this->parsed = preg_replace('/\[list=1\](.*?)\[\/list\]/s', '<ol>$1</ol>', $this->parsed);
			$this->parsed = preg_replace('/\[list=a\](.*?)\[\/list\]/s', '<ol type="a">$1</ol>', $this->parsed);
			$this->parsed = preg_replace('/\[list\](.*?)\[\/list\]/s', '<ul>$1</ul>', $this->parsed);
			$this->parsed = preg_replace('/\[\*\](.*)/', '<li>$1</li>', $this->parsed);
			$this->parsed = preg_replace('/\[code\](.*?)\[\/code\]/s', '<code>$1</code>', $this->parsed);
			$this->parsed = preg_replace('/\[youtube\](.*?)\[\/youtube\]/s', '<iframe width="560" height="315" src="//www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>', $this->parsed);
			$this->parsed = preg_replace('/\[video\](.*?)\[\/video\]/s', '<iframe width="560" height="315" src="//www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>', $this->parsed);
			$this->parsed = preg_replace('/\[sub\](.*?)\[\/sub\]/s', '<sub>$1</sub>', $this->parsed);
			$this->parsed = preg_replace('/\[sup\](.*?)\[\/sup\]/s', '<sup>$1</sup>', $this->parsed);
			$this->parsed = preg_replace('/\[small\](.*?)\[\/small\]/s', '<small>$1</small>', $this->parsed);
			$this->parsed = preg_replace('/\[table\](.*?)\[\/table\]/s', '<table>$1</table>', $this->parsed);
			$this->parsed = preg_replace('/\[tr\](.*?)\[\/tr\]/s', '<tr>$1</tr>', $this->parsed);
			$this->parsed = preg_replace('/\[td\](.*?)\[\/td\]/s', '<td>$1</td>', $this->parsed);
			return $this->parsed;
		}
	}
?>