<?php
	import('TagLib');
	/**
	 * 自定义标签库
	 */
	class TagLibMytag extends TagLib
	{
		protected $tags = array(
			'nav' => array('attr' => 'order,limit','close' => 1),
			);

		public function _nav($attr, $content){
			$attr = $this->parseXmlAttr($attr);
			$str = <<<str
<?php
	import('Class.Category', APP_NAME);
	\$cate = M('cate')->order("{$attr['order']}")->limit({$attr['limit']})->select();
	\$cate = Category::unlimitedForLayer(\$cate);
	foreach(\$cate as \$v);
?>
str;
			$str .= $content;
			$str .= '<?php endforeach; ?>';
			return $str; 		
		}
	}