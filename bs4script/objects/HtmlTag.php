<?php
class PzkHtmlTag extends PzkObject{
	public static $excludes = ['tagName', 'className', 'pzkParentId', 
			'fullNames', 'children', '_excludes', 'defaultAttributes',
			'/^p[dtlrb]$/', '/^m[gtlrb]$/', '/^b[gdbtlr]$/', 'cl'
	];
	public static $autoCloseds = ['hr', 'br', 'input', 'link', 'img'];
	public $extendClass = '';
	public $_excludes = ['tag', 'extendClass', 'xs', 'md', 'sm', 'lg', 'symbol', 'size', 'context', 'shape'];
	public $class = '';
	public $style = '';
	public $defaultAttributes = [];
	public function init() {
		$this->tagName = isset($this->tag) ? $this->tag : $this->tagName;
		$this->class .= ' ' . $this->extendClass;
		foreach($this->defaultAttributes as $key => $value) {
			if(!isset($this->$key) || !$this->$key) {
				$this->$key = $value;
			}
		}
		foreach((array)$this as $key => $value) {
			if(preg_match('/^(p[dtlrb]|m[gtlrb]|b[gdbtlr]|cl)$/', $key)) {
				$this->class .= ' ' . $key . '-' . $value;
			}
		}
	}
	
	public function html() {
		if(NO_SCRIPTS) {
			if(in_array($this->tagName, ['script', 'link', 'style'])) {
				return '';
			}
		}
		$str = '<' . $this->tagName .' ';
		foreach((array)$this as $key => $value) {
			if(!in_array($key, self::$excludes) 
					&& !in_array($key, $this->_excludes) 
					&& !self::match($key, self::$excludes) 
					&& !self::match($key, $this->_excludes) 
					&& '' !== trim($value)) {
				$str .= $key.'="' . trim($value) . '" ';
			}
		}
		$str = trim($str);
		if(in_array($this->tagName, self::$autoCloseds)) {
			$str .= ' />';
			return $str;
		}
		$str .= '>';
		foreach($this->children as $child) {
			$str .= $child->html();
		}
		$str .= '</'.$this->tagName.'>';
		return $str;
	}

	public static function match($key, $patterns) {
		foreach($patterns as $pattern) {
			if($pattern[0] === '/') {
				if(preg_match($pattern, $key)) {
					return true;
				}
			}
		}
		return false;
	}
}
