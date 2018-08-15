<?php

/* Text*/
class PzkTextCenter extends PzkHtmlTag{
	public $tag = 'div';
	public $extendClass = 'text-center';
}

class PzkTextLeft extends PzkHtmlTag{
	public $tag = 'div';
	public $extendClass = 'text-left';
}

class PzkTextRight extends PzkHtmlTag{
	public $tag = 'div';
	public $extendClass = 'text-right';
}

class PzkTextJustify extends PzkHtmlTag{
	public $tag = 'div';
	public $extendClass = 'text-justify';
}

/* Container & Grid System */
class PzkContainer extends PzkHtmlTag{
	public $tag = 'div';
	public $extendClass = 'container';
}

class PzkContainerFluid extends PzkHtmlTag{
	public $tag = 'div';
	public $extendClass = 'container-fluid';
}

class PzkRow extends PzkHtmlTag{
	public $tag = 'div';
	public $extendClass = 'row';
}

class PzkCol extends PzkHtmlTag{
	public $tag = 'div';
	public $extendClass = '';
	public function getColClass() {
		$cols = [];
		if(isset($this->xs)) {
			$cols[] = ('col-xs-' . $this->xs);
		}
		if(isset($this->xso)) {
			$cols[] = ('col-xs-offset-' . $this->xso);
		}
		if(isset($this->sm)) {
			$cols[] = ('col-sm-' . $this->sm);
		}
		if(isset($this->smo)) {
			$cols[] = ('col-sm-offset-' . $this->smo);
		}
		if(isset($this->md)) {
			$cols[] = ('col-md-' . $this->md);
		}
		if(isset($this->mdo)) {
			$cols[] = ('col-md-offset-' . $this->mdo);
		}
		if(isset($this->lg)) {
			$cols[] = ('col-lg-' . $this->lg);
		}
		if(isset($this->lgo)) {
			$cols[] = ('col-lg-offset-' . $this->lgo);
		}
		return implode(' ', $cols);
	}
	
	public function init() {
		$this->extendClass = $this->getColClass();
		parent::init();
	}
}

class PzkColFull extends PzkCol {
	public $xs = 12;
}

class PzkColHalf extends PzkCol {
	public $xs = 12;
	public $md = 6;
}

class PzkColThird extends PzkCol {
	public $xs = 12;
	public $md = 4;
}

class PzkColTwoThird extends PzkCol {
	public $xs = 12;
	public $md = 8;
}

class PzkColQuarter extends PzkCol {
	public $xs = 12;
	public $md = 3;
}

class PzkColTwoQuarter extends PzkCol {
	public $xs = 12;
	public $md = 6;
}

class PzkColThreeQuarter extends PzkCol {
	public $xs = 12;
	public $md = 9;
}

/* Form & Inputs */
class PzkFormInline extends PzkHtmlTag {
	public $tag = 'form';
	public $extendClass = 'form-inline';
}

class PzkFormHorizontal extends PzkHtmlTag {
	public $tag = 'form';
	public $extendClass = 'form-horizontal';
}

class PzkFormGroup extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'form-group';
}

class PzkInputGroup extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'input-group';
}

class PzkInputGroupAddon extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'input-group-addon';
}

class PzkFormControl extends PzkHtmlTag {
	public $extendClass = 'form-control';
	public $size = '';
	public function init() {
		if($this->size) {
			$this->extendClass .= ' input-' . $this->size;
		}
		parent::init();
	}
}

class PzkInputFormControl extends PzkFormControl {
	public $tag = 'input';
}

class PzkSelectFormControl extends PzkFormControl {
	public $tag = 'select';
}

class PzkTextareaFormControl extends PzkFormControl {
	public $tag = 'textarea';
}

class PzkStaticFormControl extends PzkHtmlTag {
	public $tag = 'p';
	public $extendClass = 'static-form-control';
}

class PzkControlLabel extends PzkHtmlTag {
	public $tag = 'label';
	public $extendClass = 'control-label';
}

class PzkFormInputHelp extends PzkHtmlTag {
	public $tag = 'span';
	public $extendClass = 'help-block';
}

class PzkCheckbox extends PzkHtmlTag {
	public $tag = 'input';
	public $type = 'checkbox';
}

class PzkRadio extends PzkHtmlTag {
	public $tag = 'input';
	public $type = 'radio';
}

/* Buttons */

class PzkBtn extends PzkHtmlTag {
	public $tag = 'button';
	public $extendClass = 'btn';
	public $context = 'default';
	public $size = '';
	public function init() {
		$this->extendClass .= ' btn-' . $this->context;
		if($this->size) {
			$this->extendClass .= ' btn-' . $this->size;
		}
		parent::init();
	}
}
class PzkBtnDefault extends PzkBtn {
	public $context = 'default';
}

class PzkBtnPrimary extends PzkBtn {
	public $context = 'primary';
}

class PzkBtnSuccess extends PzkBtn {
	public $context = 'success';
}

class PzkBtnInfo extends PzkBtn {
	public $context = 'info';
}

class PzkBtnWarning extends PzkBtn {
	public $context = 'warning';
}

class PzkBtnDanger extends PzkBtn {
	public $context = 'đanger';
}

class PzkBtnLink extends PzkBtn {
	public $context = 'link';
}

/* Images */
class PzkImgResponsive extends PzkHtmlTag {
	public $tag = 'img';
	public $extendClass = 'img-responsive';
	public $shape = '';
	public function init() {
		if($this->shape) {
			$this->extendClass .= ' img-' . $this->shape;
		}
		parent::init();
	}
}

/* Helpers */

class PzkTextHelper extends PzkHtmlTag {
	public $tag = 'p';
}

class PzkTextMuted extends PzkTextHelper {
	public $extendClass = 'text-muted';
}

class PzkTextPrimary extends PzkTextHelper {
	public $extendClass = 'text-primary';
}

class PzkTextSuccess extends PzkTextHelper {
	public $extendClass = 'text-success';
}

class PzkTextInfo extends PzkTextHelper {
	public $extendClass = 'text-info';
}

class PzkTextWarning extends PzkTextHelper {
	public $extendClass = 'text-warning';
}

class PzkTextDanger extends PzkTextHelper {
	public $extendClass = 'text-danger';
}

class PzkBgHelper extends PzkHtmlTag {
	public $tag = 'p';
}

class PzkBgMuted extends PzkBgHelper {
	public $extendClass = 'bg-muted';
}

class PzkBgPrimary extends PzkBgHelper {
	public $extendClass = 'bg-primary';
}

class PzkBgSuccess extends PzkBgHelper {
	public $extendClass = 'bg-success';
}

class PzkBgInfo extends PzkBgHelper {
	public $extendClass = 'bg-info';
}

class PzkBgWarning extends PzkBgHelper {
	public $extendClass = 'bg-warning';
}

class PzkBgDanger extends PzkBgHelper {
	public $extendClass = 'bg-danger';
}

class PzkBtnClose extends PzkHtmlTag {
	public $tag = 'button';
	public $type = 'button';
	public $extendClass = 'close';
	public function init() {
		$this->{'aria-label'} = 'Close';
		parent::init();
	}
}

class PzkBtnCloseSign extends PzkHtmlTag {
	public function html() {
		return '<span aria-hidden="true">&times;</span>';
	}
}

class PzkCaret extends PzkHtmlTag {
	public $tag = 'span';
	public $extendClass = 'caret';
}

class PzkPullLeft extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'pull-left';
}

class PzkPullRight extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'pull-right';
}

class PzkCenterBlock extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'center-block';
}

class PzkClearfix extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'clearfix';
}

class PzkComment extends PzkObject {
	public $context = '';
	public function html() {
		$str = '<!-- '. $this->context . ' -->';
		foreach($this->children as $child) {
			$str .= $child->html();
		}
		$str .= '<!-- End '. $this->context . ' -->';
		return $str;
	}
}

class PzkCommentLine extends PzkObject {
	public $context = '';
	public function html() {
		return '<!-- '. $this->context . ' -->';
	}
}

/* Glyphicons & FontAwesome */
class PzkIcon extends PzkHtmlTag {
	public $tag = 'span';
	public $extendClass = 'glyphicon';
	public $symbol = '';
	public function init() {
		$this->extendClass .= ' glyphicon-' . $this->symbol;
		return parent::init();
	}
}

class PzkIconStar extends PzkIcon {
	public $symbol = 'star';
}

class PzkIconUser extends PzkIcon {
	public $symbol = 'user';
}

class PzkIconSearch extends PzkIcon {
	public $symbol = 'search';
}

class PzkFa extends PzkHtmlTag {
	public $tag = 'span';
	public $extendClass = 'fa';
	public $symbol = '';
	public $size = '2x';
	public function init() {
		$this->extendClass .= ' fa-' . $this->symbol . ' fa-' . $this->size;
		return parent::init();
	}
}

class PzkFa1x extends PzkFa {
	public $size = '1x';
}

class PzkFa2x extends PzkFa {
	public $size = '2x';
}

/**
 * Components
 */

/* Dropdowns */
class PzkDropdown extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'dropdown';
}

class PzkDropUp extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'dropup';
}

class PzkDropdownMenu extends PzkHtmlTag {
	public $tag = 'ul';
	public $extendClass = 'dropdown-menu';
}
class PzkDropdownMenuItem extends PzkHtmlTag {
	public $tag = 'li';
}

class PzkDropdownMenuDivider extends PzkHtmlTag {
	public $tag = 'li';
	public $role = 'separator';
	public $extendClass = 'divider';
}


class PzkBtnDropdown extends PzkBtn {
	public function init() {
		$this->extendClass .= ' dropdown-toggle';
		$this->{'data-toggle'} = 'dropdown';
		$this->{'aria-haspopup'} = 'true';
		$this->{'aria-expanded'} = 'false';
		parent::init();
	}
}

/* Btn Group */

class PzkBtnGroup extends PzkHtmlTag {
	public $tag = 'div';
	public $role = 'group';
	public $extendClass = 'btn-group';
	public $size = '';
	public $align = '';
	public function init() {
		if($this->size) {
			$this->extendClass .= ' btn-group-' . $this->size;
		}
		if($this->align) {
			$this->extendClass .= ' btn-group-' . $this->align;
		}
		parent::init();
	}
}

class PzkBtnGroupVertical extends PzkBtnGroup {
	public $extendClass = 'btn-group-vertical';
} 

class PzkBtnToolbar extends PzkHtmlTag {
	public $tag = 'div';
	public $role = 'toolbar';
}