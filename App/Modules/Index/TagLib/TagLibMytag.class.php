<?php
	/**
	 * 自定义标签库
	 */
	class TagLibMytag extends TagLib
	{
		protected $tags = array(
			'nav' => array('attr' => 'order','close' => 1),
			'new' => array('attr' => 'limit', 'close' =>1),
			);


		public function _nav($attr, $content){
			$attr = $this->parseXmlAttr($attr);
			$str = <<<str
<?php
	import('Class.Category', APP_NAME);
	\$_nav_cate = M('cate')->order("{$attr['order']}")->select();
	\$_nav_cate = Category::unlimitedForLayer(\$_nav_cate);
	foreach(\$_nav_cate as \$_nav_cate_v):
		extract(\$_nav_cate_v);
		\$url = U('/c_' . \$id);
?>
str;
			$str .= $content;
			$str .= '<?php endforeach; ?>';
			return $str; 		
		}

		public function _new($attr, $content){
			$attr = $this->parseXmlAttr($attr);
			$str = '<?php ';
			$str .= '$field = array("id", "title", "click");';
			$str .= '$_new_list = M("blog")->field($field)->order("time DESC")->limit('. $attr['limit'] .')->select();';
			$str .= 'foreach($_new_list as $_new_v):';
			$str .= 'extract($_new_v);';
			$str .= '$url = U("/" . $id);';
			$str .= '?>';
			$str .= $content;
			$str .='<?php endforeach; ?>';
			return $str;
		}
	}