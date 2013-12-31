<?php

	class IndexAction extends Action
	{
		public function index(){
			if(!$topCate = S('index_blog_list')){
				import('Class.Category', APP_NAME);
				$category = M('cate')->order('sort')->select();
				$topCate = Category::getChild($category);
				$db = M('blog');
				$field = array('id', 'title', 'time');
				foreach($topCate as $k => $v){
					$cids = Category::getChildId($category, $v['id']);
					$cids[] = $v['id'];
					$where = array('cid' =>array('IN',$cids),'del' => 0);
					$topCate[$k]['blog'] = $db->field($field)->where($where)->order('time DESC')->select();
				}
				S('index_blog_list', $topCate, 10);
			}
			$this->topCate = $topCate;
			$this->display();
		}
	}