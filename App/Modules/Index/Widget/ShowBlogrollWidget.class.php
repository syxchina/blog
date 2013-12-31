<?php
	
	class ShowBlogrollWidget extends Widget
	{
		public function render($data){
			$where = array('status' => 1);
			$field = array('id', 'name', 'address');
			$data['blogroll'] = M('blogroll')->where($where)->field($field)->order('sort DESC')->limit($data['limit'])->select();
			return $this->renderFile('', $data);
		}
	}