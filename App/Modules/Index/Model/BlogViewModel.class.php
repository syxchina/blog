<?php

	class BlogViewModel extends ViewModel
	{
		public $viewFields = array(
			'blog' => array('id', 'title', 'summary', 'time', 'click',
				'_type' => 'LEFT'
				),
			'cate' => array('name', '_on' => 'blog.cid = cate.id')
			);
		public function getBlogInfo($where, $limit){
			return $this->where($where)->order('time DESC')->limit($limit)->select();
		}
	}