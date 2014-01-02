<?php

	class ShowAction extends Action
	{
		public function index(){
			$id = $_GET['id'] + 0;
			
			$blog = M('blog')->field(array('del', 'summary'), true)->find($id);
			$cate = M('cate')->field(array('sort'), true)->select();
			import('Class.Category', APP_NAME);
			// 获取家朴树
			$parents = Category::getParents($cate, $blog['cid']);
			$this->parents = array_reverse($parents);
			$this->blog = $blog;
			$this->display();
		}

		public function clickInc(){
			$id = $_GET['id'] + 0;
			$click = M('blog')->where(array('id' => $id))->getField('click');
			M('blog')->where(array('id' => $id))->setInc('click', 1);
			echo 'document.write(' . $click . ')';
		}
	}