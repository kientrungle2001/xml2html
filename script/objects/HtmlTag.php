<?php
class PzkHtmlTag extends PzkObject{
	public static $excludes = ['tagName', 'className', 'pzkParentId', 'fullNames', 'children', '_excludes', 'defaultAttributes'];
	public static $autoCloseds = ['hr', 'br', 'input', 'link', 'img'];
	public $extendClass = '';
	public $_excludes = ['tag', 'extendClass', 'xs', 'md', 'sm', 'lg', 'symbol', 'size', 'context', 'shape'];
	public $class = '';
	public $defaultAttributes = [];
	public function init() {
		$this->tagName = isset($this->tag) ? $this->tag : $this->tagName;
		$this->class .= ' ' . $this->extendClass;
		foreach($this->defaultAttributes as $key => $value) {
			if(!isset($this->$key) || !$this->$key) {
				$this->$key = $value;
			}
		}
	}
	
	public function html() {
		$str = '<' . $this->tagName .' ';
		foreach((array)$this as $key => $value) {
			if(!in_array($key, self::$excludes) && !in_array($key, $this->_excludes) && '' !== trim($value)) {
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
}
