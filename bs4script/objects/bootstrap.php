<?php
/**
 * Layouts
 * ==================================
 */

/**
 * Container
 */
class PzkContainer extends PzkHtmlTag{
	public $tag = 'div';
	public $extendClass = 'container';
}

class PzkContainerFluid extends PzkHtmlTag{
	public $tag = 'div';
	public $extendClass = 'container-fluid';
}

/**
 * Grids
 */
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
			$cols[] = ('offset-xs-' . $this->xso);
		}
		if(isset($this->sm)) {
			$cols[] = ('col-sm-' . $this->sm);
		}
		if(isset($this->smo)) {
			$cols[] = ('offset-sm-' . $this->smo);
		}
		if(isset($this->md)) {
			$cols[] = ('col-md-' . $this->md);
		}
		if(isset($this->mdo)) {
			$cols[] = ('offset-md-' . $this->mdo);
		}
		if(isset($this->lg)) {
			$cols[] = ('col-lg-' . $this->lg);
		}
		if(isset($this->lgo)) {
			$cols[] = ('offset-lg-' . $this->lgo);
		}

		if(isset($this->size)) {
			$cols[] = ('col-' . $this->size);
		}
		if(!count($cols)) {
			$cols[] = 'col';
		}
		$others = [];
		// align-items
		$alignItems = 'ai';
		if(isset($this->$alignItems)) {
			$others[] = 'align-items-' . $this->$alignItems;
		}
		$alignSelf = 'as';
		if(isset($this->$alignSelf)) {
			$others[] = 'align-self-' . $this->$alignSelf;
		}
		$justifyCenter = 'jc';
		if(isset($this->$justifyCenter)) {
			$others[] = 'justify-center-' . $this->$justifyCenter;
		}
		$guiters = 'g';
		if(isset($this->$guiters)) {
			$others[] = $this->$guiters.'-guiters';
		}
		$order = 'o';
		if(isset($this->$order)) {
			$others[] = 'order-' . $this->$order;
		}
		$marginLeft = 'ml';
		if(isset($this->$marginLeft)) {
			$others[] = 'ml-' . $this->$marginLeft;
		}
		$marginRight = 'mr';
		if(isset($this->$marginRight)) {
			$others[] = 'ml-' . $this->$marginRight;
		}
		return implode(' ', $cols) . ' ' . implode(' ', $others);
	}
	
	public function init() {
		$this->extendClass = $this->getColClass();
		parent::init();
	}
}

class PzkW100 extends PzkHtmlTag{
	public $tag = 'div';
	public $extendClass = 'w-100';
}

/**
 * Utils
 */
class PzkListUnstyled extends PzkHtmlTag {
	public $tag = 'ul';
	public $extendClass = 'list-unstyled';
}

/**
 * Media
 */

class PzkMedia extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'media';
}

class PzkMediaBody extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'media-body';
}

class PzkMediaList extends PzkListUnstyled {
}

class PzkMediaItem extends PzkMedia {
	public $tag = 'li';
}

/**
 * Image
 */

class PzkImgFluid extends PzkHtmlTag {
	public $tag = 'img';
	public $extendClass = 'img-fluid';
}

/**
 * Components
 */

/* Alerts */
class PzkAlertHelper extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'alert';
	public $context = 'default';
	public $role = 'alert';
	public function init() {
		if($this->context) {
			$this->extendClass .= ' alert-' . $this->context;
		}
		parent::init();
	}
}

class PzkAlertDefault extends PzkAlertHelper {
	public $context = 'default';
}

class PzkAlertPrimary extends PzkAlertHelper {
	public $context = 'primary';
}

class PzkAlertSuccess extends PzkAlertHelper {
	public $context = 'success';
}

class PzkAlertInfo extends PzkAlertHelper {
	public $context = 'info';
}

class PzkAlertWarning extends PzkAlertHelper {
	public $context = 'warning';
}

class PzkAlertDanger extends PzkAlertHelper {
	public $context = 'danger';
}

/* Badge */
class PzkBadge extends PzkHtmlTag {
	public $tag = 'span';
	public $extendClass = 'badge';
	public function init() {
		$this->extendClass .= ' badge-' . $this->context;
		parent::init();
	}
}

/* Breadcrumbs */
class PzkBreadcrumb extends PzkHtmlTag {
	public $tag = 'ol';
	public $extendClass = 'breadcrumb';
}

class PzkBreadcrumbItem extends PzkHtmlTag {
	public $tag = 'li';
	public $extendClass = 'breadcrumb-item';
}

/* Buttons */

class PzkBtn extends PzkHtmlTag {
	public $tag = 'button';
	public $extendClass = 'btn';
	public function init() {
		if(isset($this->context))
			$this->extendClass .= ' btn-' . $this->context;
		if(isset($this->outline))
			$this->extendClass .= ' btn-outline-' . $this->outline;
		if(isset($this->size)) {
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
	public $context = 'danger';
}

/* Btn Group */
class PzkBtnGroup extends PzkHtmlTag {
	public $tag = 'div';
	public $role = 'group';
	public $extendClass = 'btn-group';
	public function init() {
		if(isset($this->size)) {
			$this->extendClass .= ' btn-group-' . $this->size;
		}
		if(isset($this->align)) {
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
	public $extendClass = 'btn-toolbar';
}

/**
 * Floats & clearfix
 */
class PzkClearfix extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'clearfix';
}
class PzkFloatLeft extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'float-left';
}

class PzkFloatRight extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'float-right';
}