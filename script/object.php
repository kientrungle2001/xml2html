<?php
class PzkObject {
	public $children = [];
	public function __construct($attrs) {
		foreach($attrs as $key => $value) {
			$this->$key = $value;
		}
	}
	public function init() {
	}
	
	public function finish() {
	}
	
	public function append($obj) {
		$this->children[] = $obj;
	}
}

class PzkRegion extends PzkObject {
	public function html() {
		$str = '';
		foreach($this->children as $child) {
			$str .= $child->html();
		}
		return $str;
	}
}

class PzkRoot extends PzkRegion {
}