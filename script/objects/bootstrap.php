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
	public $size = '';
	public function init() {
		if($this->size) {
			$this->extendClass .= ' input-group-' . $this->size;
		}
		parent::init();
	}
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
	public $extendClass = 'form-control-static';
}

class PzkControlLabel extends PzkHtmlTag {
	public $tag = 'label';
	public $extendClass = 'control-label';
}

class PzkFormInputHelp extends PzkHtmlTag {
	public $tag = 'span';
	public $extendClass = 'help-block';
}

class PzkHelpBlock extends PzkFormInputHelp {
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
	public $context = 'danger';
}

class PzkBtnLink extends PzkBtn {
	public $context = 'link';
}

class PzkBtnCollapse extends PzkBtn {
	public function init() {
		$this->{'data-toggle'} = 'collapse';
		$this->{'aria-expanded'} = 'false';
		parent::init();
	}
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

class PzkImgRounded extends PzkHtmlTag {
	public $tag = 'img';
	public $extendClass = 'img-rounded';
}

class PzkImgCircle extends PzkHtmlTag {
	public $tag = 'img';
	public $extendClass = 'img-circle';
}

class PzkImgThumbnail extends PzkHtmlTag {
	public $tag = 'img';
	public $extendClass = 'img-thumbnail';
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

class PzkIconChevronLeft extends PzkIcon {
	public $symbol = 'chevron-left';
}

class PzkIconChevronRight extends PzkIcon {
	public $symbol = 'chevron-right';
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

class PzkIconBar extends PzkHtmlTag {
	public $tag = 'span';
	public $extendClass = 'icon-bar';
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

/* Navs */

class PzkNavUl extends PzkHtmlTag {
	public $tag = 'ul';
	public $extendClass = 'nav';
	public $type = 'tabs'; // tabs, pills
	public $align = '';	// justified, stacked
	public function init() {
		if($this->type) {
			$this->extendClass .= ' nav-' . $this->type;
		}
		if($this->align) {
			$this->extendClass .= ' nav-' . $this->align;
		}

		parent::init();
	}
}

class PzkNavTabs extends PzkNavUl {
	public $type = 'tabs';
}

class PzkNavTabsJustified extends PzkNavTabs {
	public $align = 'justified';
}

class PzkNavPills extends PzkNavUl {
	public $type = 'pills';
}

class PzkNavPillsJustified extends PzkNavPills {
	public $align = 'justified';
}

class PzkNavLi extends PzkHtmlTag {
	public $tag = 'li';
	public $role = 'presentation';
}

class PzkNavItem extends PzkNavLi {
}

class PzkNavTabsItem extends PzkNavItem {
}

class PzkNavTabsItemLink extends PzkHtmlTag {
	public $tag = 'a';
	public function init() {
		$attrs = [
			'role'	=> 'tab',
			'data-toggle'	=>	'tab'
		];
		foreach($attrs as $key => $value) {
			$this->key = $value;
		}
		parent::init();
	}
}

/* Navbar */
class PzkNavbar extends PzkHtmlTag {
	public $tag = 'nav';
	public $extendClass = 'navbar';
	public $type = 'default';
	public $align = '';
	public function init() {
		if($this->type) {
			$this->extendClass .= ' navbar-' . $this->type;
		}
		if($this->align) {
			$this->extendClass .= ' navbar-' . $this->align;
		}
		parent::init();
	}
}

class PzkNavbarBtnCollapse extends PzkBtn {
	public $extendClass = 'navbar-toggle collapsed';
	public function init() {
		$this->{'data-toggle'} = 'collapse';
		$this->{'aria-expanded'} = 'false';
		parent::init();
	}
}

class PzkNavbarHeader extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'navbar-header';
}

class PzkNavbarBrand extends PzkHtmlTag {
	public $tag = 'a';
	public $extendClass = 'navbar-brand';
}

class PzkNavbarForm extends PzkHtmlTag {
	public $tag = 'form';
	public $extendClass = 'navbar-form';
	public $align = 'left'; // left, right
	public function init() {
		if($this->align) {
			$this->extendClass .= ' navbar-' . $this->align;
		}
		parent::init();
	}
}

class PzkNavbarNav extends PzkHtmlTag {
	public $tag = 'ul';
	public $extendClass = 'nav navbar-nav';
	public $align = 'right'; // left, right
	public function init() {
		if($this->align) {
			$this->extendClass .= ' navbar-' . $this->align;
		}
		parent::init();
	}
}

class PzkNavbarNavItem extends PzkHtmlTag {
	public $tag = 'li';
}

class PzkNavbarBtn extends PzkBtn {
	public function init() {
		$this->extendClass .= ' navbar-btn';
		parent::init();
	}
}

class PzkNavbarText extends PzkHtmlTag {
	public $tag = 'p';
	public $extendClass = 'navbar-text';
}

class PzkNavbarLink extends PzkHtmlTag {
	public $tag = 'a';
	public $extendClass = 'navbar-link';
}

/* Breadcrumbs */
class PzkBreadcrumb extends PzkHtmlTag {
	public $tag = 'ol';
	public $extendClass = 'breadcrumb';
}

class PzkBreadcrumbItem extends PzkHtmlTag {
	public $tag = 'li';
}

/* Pagination */

class PzkPagination extends PzkHtmlTag {
	public $tag = 'ul';
	public $extendClass = 'pagination';
	public $size = '';
	public function init() {
		if($this->size) {
			$this->extendClass .= ' pagination-' . $this->size;
		}
		parent::init();
	}
}

class PzkPaginationItem extends PzkHtmlTag {
	public $tag = 'li';
}

class PzkPager extends PzkHtmlTag {
	public $tag = 'ul';
	public $extendClass = 'pager';
}

class PzkPagerItem extends PzkHtmlTag {
	public $tag = 'li';
}

class PzkPagerPrevious extends PzkPagerItem {
	public $extendClass = 'previous';
}

class PzkPagerNext extends PzkPagerItem {
	public $extendClass = 'next';
}

/* Labels */

class PzkLabelHelper extends PzkHtmlTag {
	public $tag = 'span';
	public $extendClass = 'label';
	public $context = 'default';
	public function init() {
		if($this->context) {
			$this->extendClass .= ' label-' . $this->context;
		}
		parent::init();
	}
}

class PzkLabelDefault extends PzkLabelHelper {
	public $context = 'default';
}

class PzkLabelPrimary extends PzkLabelHelper {
	public $context = 'primary';
}

class PzkLabelSuccess extends PzkLabelHelper {
	public $context = 'success';
}

class PzkLabelInfo extends PzkLabelHelper {
	public $context = 'info';
}

class PzkLabelWarning extends PzkLabelHelper {
	public $context = 'warning';
}

class PzkLabelDanger extends PzkLabelHelper {
	public $context = 'danger';
}

/* Badge */
class PzkBadge extends PzkHtmlTag {
	public $tag = 'span';
	public $extendClass = 'badge';
}

/* Jumbotron */
class PzkJumbotron extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'jumbotron';
}

/* Page Header */
class PzkPageHeader extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'page-header';
}

/* Thumbnail */
class PzkThumbnailLink extends PzkHtmlTag {
	public $tag = 'a';
	public $extendClass = 'thumbnail';
}
class PzkThumbnail extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'thumbnail';
}

class PzkThumbnailImg extends PzkHtmlTag {
	public $tag = 'img';
	public $extendClass = 'img-responsive';
}

class PzkThumbnailCaption extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'caption';
}

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

/* Progressbar */

class PzkProgress extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'progress';
}

class PzkProgressBar extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'progress-bar';
	public $role = 'progressbar';
	// field aria-valuenow
	// field aria-valuemin
	// field aria-valuemax
	public $value = '60';
	public $context = '';
	public $type = ''; // striped
	public function init () {
		$this->style = 'width: '. $this->value . '%';
		if($this->context) {
			$this->extendClass .= ' progress-bar-' . $this->context;
		}
		if($this->type) {
			$this->extendClass .= ' progress-bar-' . $this->type;
		}
		parent::init();
	}
}

/* Media Objects */

class PzkMedia extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'media';
}

class PzkMediaLeft extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'media-left';
}

class PzkMediaRight extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'media-right';
}

class PzkMediaObject extends PzkHtmlTag {
	public $tag = 'img';
	public $extendClass = 'media-object';
}

class PzkMediaBody extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'media-body';
}

class PzkMediaBodyHeading extends PzkHtmlTag {
	public $tag = 'h4';
	public $extendClass = 'media-heading';
}

class PzkMediaList extends PzkHtmlTag {
	public $tag = 'ul';
	public $extendClass = 'media-list';
}

class PzkMediaListItem extends PzkMedia {
	public $tag = 'li';
}

/* List Group */
class PzkListGroup extends PzkHtmlTag {
	public $tag = 'ul';
	public $extendClass = 'list-group';
}

class PzkListGroupItem extends PzkHtmlTag {
	public $tag = 'li';
	public $extendClass = 'list-group-item';
	public $context = '';
	public function init() {
		if($this->context) {
			$this->extendClass .= ' list-group-item-' . $this->context;
		}
		parent::init();
	}
}

class PzkListGroupDiv extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'list-group';
}

class PzkListGroupItemLink extends PzkListGroupItem {
	public $tag = 'a';
}

class PzkListGroupItemBtn extends PzkListGroupItem {
	public $tag = 'button';
	public $type = 'button';
}

class PzkListGroupItemHeading extends PzkHtmlTag {
	public $tag = 'h4';
	public $extendClass = 'list-group-item-heading';
}

class PzkListGroupItemText extends PzkHtmlTag {
	public $tag = 'p';
	public $extendClass = 'list-group-item-text';
}

/* Panels */
class PzkPanel extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'panel';
	public $context = 'default';
	public function init() {
		if($this->context) {
			$this->extendClass .= ' panel-' . $this->context;
		}
		parent::init();
	}
}

class PzkPanelHeading extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'panel-heading';
}

class PzkPanelBody extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'panel-body';
}

class PzkPanelFooter extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'panel-footer';
}

class PzkWell extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'well';
	public $size = '';
	public function init() {
		if($this->size) {
			$this->extendClass .= ' well-' . $this->size;
		}
		parent::init();
	}
}

class PzkEmbedResponsive extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'embed-responsive';
	public $size = '';
	public function init() {
		if($this->size) {
			$this->extendClass .= ' embed-responsive-' . $this->size;
		}
		parent::init();
	}
}

class PzkEmbedResponsiveItem extends PzkHtmlTag {
	public $tag = 'iframe';
	public $extendClass = 'embed-responsive-item';
}

/* Modal */

class PzkModal extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'modal fade';
	public $tabindex = '-1';
	public $role = 'dialog';
}

class PzkModalDialog extends PzkHtmlTag {
	public $tag = 'div';
	public $role = 'document';
	public $extendClass = 'modal-dialog';
	public $size = ''; // lg, sm
	public function init() {
		if($this->size) {
			$this->extendClass .= ' modal-' . $this->size;
		}
		parent::init();
	}
}

class PzkModalContent extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'modal-content';
}

class PzkModalHeader extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'modal-header';
}

class PzkModalTitle extends PzkHtmlTag {
	public $tag = 'h4';
	public $extendClass = 'modal-title';
}

class PzkModalBody extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'modal-body';
}

class PzkModalFooter extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'modal-footer';
}

/* Tabs */
class PzkTabContent extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'tab-content';
}

class PzkTabPane extends PzkHtmlTag {
	public $tag = 'div';
	public $role = 'tabpanel';
	public $extendClass = 'tab-pane fade';
}

/* Tooltip */
class PzkBtnTooltip extends PzkBtn {
	public $align = '';
	public $title = 'tooltip';
	public function init() {
		$this->{'data-toggle'} = 'tooltip';
		if($this->align) {
			$this->{'data-placement'} = $this->align;
		}
		parent::init();
	}
}

/* Popover */

class PzkBtnPopover extends PzkBtn {
	public $align = '';
	public $title = 'tooltip';
	public $defaultAttributes = [
		'data-toggle'		=> 'popover',
		'data-container'	=>	'body'
	];
	public function init() {
		if($this->align) {
			$this->{'data-placement'} = $this->align;
		}
		parent::init();
	}
}

/* Carousel */
class PzkCarousel extends PzkHtmlTag {
	public $tag = 'div';
	public $defaultAttributes = [
		'data-ride' => 'carousel'
	];
	public $extendClass = 'carousel slide';
}

class PzkCarouselIndicators extends PzkHtmlTag {
	public $tag = 'ol';
	public $extendClass = 'carousel-indicators';
}

class PzkCarouselIndicatorsItem extends PzkHtmlTag {
	public $tag = 'li';
}

class PzkCarouselInner extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'carousel-inner';
	public $role = 'listbox';
}

class PzkCarouselInnerItem extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'item';
}

class PzkCarouselInnerItemImg extends PzkHtmlTag {
	public $tag = 'img';
	public $extendClass = 'img-responsive';
}

class PzkCarouselInnerItemCaption extends PzkHtmlTag {
	public $tag = 'div';
	public $extendClass = 'carousel-caption';
}

class PzkCarouselControl extends PzkHtmlTag {
	public $tag = 'a';
	public $extendClass = 'carousel-control';
	public $direction = 'left'; // left, right
	public $role = 'button';
	public $defaultAttributes = [
		'data-slide'	=> 	'prev'
	];

	public function init() {
		if($this->direction) {
			$this->extendClass .= ' ' . $this->direction;
		}
	}
}

class PzkCarouselControlPrev extends PzkCarouselControl {

}

class PzkCarouselControlNext extends PzkCarouselControl {
	public $direction = 'right'; // left, right
	public $defaultAttributes = [
		'data-slide'	=> 	'next'
	];
}

