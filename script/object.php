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

