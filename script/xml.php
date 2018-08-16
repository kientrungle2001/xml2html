<?php
function html_escape($str) {
	return htmlspecialchars($str, ENT_COMPAT, 'utf-8');
}
function str_ucfirst($str) {
	return strtoupper($str[0]) . substr($str, 1);
}
define('BASE_DIR', dirname(__FILE__));
require_once 'object.php';
require_once 'objects/HtmlTag.php';
require_once 'objects/bootstrap.php';

class PzkParser {

    public static $rules = array();
	public static $layoutcache = null;

    /**
     * 	@description: parse mot dom document
     * 	thanh cac object va init cac object do
     * 	@param $obj doi tuong can parse: co the la domdocument,
     * 	domelement, string, filepath, dom node
     */
    public static function parse($obj) {
        // neu obj la mot dom document
        if (is_a($obj, 'DOMDocument')) {
            return self::parse($obj->documentElement);

            // neu obj la mot dom node
        } else if (is_a($obj, 'DOMElement')) {
            return self::parseNode($obj);

            // neu obj la mot string
        } else if (is_string($obj)) {
            // neu obj la mot duong dan den file
            if (!preg_match('/[\<\>]/', $obj)) {
                return self::parseFile($obj);
            }
            return self::parseDocument($obj);
        }
    }

    public static function parseFile($obj) {
		return self::parseDocument(file_get_contents($obj.'.xml'));
    }

    public static function parseDocument($source) {
		$pageDom = new DOMDocument('1.0', 'utf-8');
        $pageDom->preserveWhiteSpace = false;
        $pageDom->formatOutput = true;
        try {
            $pageDom->loadXML($source);
            return self::parseNode($pageDom->documentElement);
        } catch (Exception $err) {
			//echo htmlentities($source);
			die($err->getMessage());
            return NULL;
        }
    }

    /**
     * Parse mot doi tuong tu mot node
     * @param $node node can parse
     * @param $parent la parent cua node can parse
     */
    public static function parseNode($node, $parent = false) {
        if ($node->nodeType == XML_ELEMENT_NODE) {

            $nodeName = $node->nodeName;

            // xet xem co phai html tag binh thuong khong
            if (self::isHtmlTag($nodeName)) {
                $nodeName = 'HtmlTag';
            }

			// tách tagName theo dấu .
            $names 							= 	explode('.', $nodeName);
			$namesCountLastIndex 			= 	count($names) - 1;
			$names[$namesCountLastIndex] = str_ucfirst ($names[$namesCountLastIndex]);
            $className 						= 	self::getClass($names);
			$object							=	implode('/',	$names);
			
			if(!class_exists($className)) {
				// tìm kiếm mặc định trong /objects
				$objectPaths[]					=	'objects';
				$fileName 						=	null;
				foreach($objectPaths as $objectPath) {
					if(is_file($fileObjectPath = BASE_DIR . '/' . ($tmp = $objectPath . '/' . $object . '.php') )) {
						$fileName 				=	$tmp;
						break;
					}
				}
				
				// nếu không tìm thấy object
				if(null === $fileName) {
					echo '<pre>';
					
					echo ('object ' . $object . ' not found');
					debug_print_backtrace();
					die();
				}
				
				// ket qua
				require_once BASE_DIR . '/' . $fileName;
			}
            // lay cac thuoc tinh
            $attrs = array();
            $attrs['tagName'] = $node->nodeName;
            $attrs['className'] = $className;
            $attrs['pzkParentId'] = isset($parent->id)?$parent->id: null;
            $attrs['fullNames'] = $names;

			foreach ($node->attributes as $attr) {
				$nodeName = $attr->nodeName;
				$nodeValue = $attr->nodeValue;
				$attrs[$attr->nodeName] = $attr->nodeValue;
			}


            // Tao ra obj
            $obj = new $className($attrs);
            $obj->init();

            // duyet qua cac node con
            $childNodes = $node->childNodes;
            foreach ($childNodes as $childNode) {
                // neu la mot node con binh thuong
                if ($childNode->nodeType == XML_ELEMENT_NODE) {
                    $childObj = self::parseNode($childNode, $obj);
                    $obj->append($childObj);

                    // neu la mot text node
                } else if ($childNode->nodeType == XML_TEXT_NODE) {
                    //if (trim($childNode->nodeValue))
                        $obj->append(self::parse('<textLabel value="' . html_escape($childNode->nodeValue) . '" />', $obj));

                    // neu la mot cdata node
                } else if ($childNode->nodeType == XML_CDATA_SECTION_NODE) {
                    //if (trim($childNode->nodeValue))
                        $obj->append(self::parse('<textLabel value="' . html_escape($childNode->nodeValue) . '" />', $obj));
                }
            }

            $obj->finish();

            return $obj;
        }
    }
    
    /**
     * lay ten class cua tagName
     */
    public static function getClass($fullNames) {
        $className = 'Pzk';
        foreach ($fullNames as $name) {
            $className .= str_ucfirst($name);
        }
        return $className;
    }

    /**
     * La html tag
     */
    public static function isHtmlTag($tagName) {
        static $tags = array(
            'h1' => true, 'h2' => true, 'h3' => true, 'h4' => true, 'h5' => true, 'h6' => true, 'h7' => true, 'marquee' => true, 'br' => true,
            'p' => true, 'em' => true, 'strong' => true, 'a' => true, 'style' => true, 'div' => true, 'span' => true, 'label' => true, 'b' => true,
            'small' => true, 'mark' => true, 'del'  => true, 's'    => true, 'ins'  => true, 'u' => true, 'i' => true,
			'hr' => true,
            'script' => true, 'link' => true,
            'form'	=> true,
            'select' => true, 'option' => true,
            'ul' => true, 'li' => true, 'ol' => true, 'dl' => true, 'dd' => true, 'dt' => true,
            'table' => true, 'tr' => true, 'th' => true, 'td' => true, 'thead' => true, 'tbody' => true, 'caption' => true,
            'input' => true, 'textarea' => true,
			'img' => true, 'pre' => true, 'header' => true,
            'nav' => true,
            'address' => true, 'blockquote' => true,
            'footer' => true,
            'header' => true,
            'cite' => true,
            'code' => true,
            'section' => true,
            'kbd' => true,
            'pre' => true,
            'var' => true,
            'samp' => true,
			'H1' => true, 'H2' => true, 'H3' => true, 'H4' => true, 'H5' => true, 'H6' => true, 'H7' => true, 'Marquee' => true, 'Br' => true,
            'P' => true, 'Em' => true, 'Strong' => true, 'A' => true, 'Style' => true, 'Div' => true, 'Span' => true, 'Label' => true, 'B' => true,
            'Small' => true, 'Mark' => true, 'Del'  => true,    'S' => true, 'Ins'  => true, 'U' => true, 'I' => true, 
            'Hr' => true,
            'Script' => true, 'Link' => true,
            'Form'	=> true,
            'Select' => true, 'Option' => true,
            'Ul' => true, 'Li' => true, 'Ol' => true, 'Dl' => true, 'Dd' => true, 'Dt' => true,
            'Table' => true, 'Tr' => true, 'Th' => true, 'Td' => true, 'Thead' => true, 'Tbody' => true, 'Caption' => true,
            'Input' => true, 'Textarea' => true,
			'Img' => true, 'Pre' => true, 'Header' => true,
            'Nav'	=> true,
            'Address' => true,
            'Blockquote' => true,
            'Footer' => true,
            'Header' => true,
            'Cite' => true,
            'Code' => true,
            'Section' => true,
            'Kbd' => true,
            'Pre' => true,
            'Var' => true,
            'Samp' => true,
        );
        return isset($tags[$tagName])?$tags[$tagName]: FALSE;
    }
}

/**
 * 
 * @param unknown $xml
 * @return PzkObject
 */
function pzk_parse($xml) {
	return PzkParser::parse($xml);
}
function eval_file($file) {
	ob_start();
	require $file;
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
}
require __DIR__.'/vendor/autoload.php';
$obj = pzk_parse(eval_file($argv[1] . '.xml'));
$content = Mihaeu\HtmlFormatter::format($obj->html());
file_put_contents($argv[1] . '.html', $content);
//echo $content;
