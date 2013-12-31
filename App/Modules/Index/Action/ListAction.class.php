<?php
	
	class ListAction extends Action
	{
		public function index(){
			import('Class.Category', APP_NAME);
			import('ORG.Util.Page');
			$id = $_GET['id'] + 0 ;
			$category = M('cate')->order('sort')->select();
			$cids = Category::getChildId($category, $id);
			$cids[] = $id;
			$where = array('cid' => array('IN', $cids), 'del' => 0);
			
			//分页
			$blogCounts = M('blog')->where($where)->count();
			$page = new Page($blogCounts, 15);
			$limit = $page->firstRow . ',' . $page->listRows;
			$blogview = D('BlogView');
			$this->blog = $blogview->getBlogInfo($where, $limit);
			$this->page = $page->show();
			$this->display();
		}
	}