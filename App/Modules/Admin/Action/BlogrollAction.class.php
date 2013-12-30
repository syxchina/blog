<?php

	/**
	 * 友情链接模块
	 */
	class BlogrollAction extends Action
	{
		// 友情链接列表
		public function index(){
			$this->blogroll = M('blogroll')->order('sort DESC')->select();
			$this->display();
		}

		// 排序
		public function sort(){
			$db = M('blogroll');
			foreach ($_POST as $key => $value) {
				$db->where(array('id' => $key))->setField('sort', $value);
			}

			$this->redirect(GROUP_NAME . '/Blogroll/index');
		}

		//添加友情链接 
		public function addBlogroll(){
			$this->display();
		}

		//处理添加链接表单
		public function addBlogrollHandle(){
			$data = array(
				'name' => $_POST['name'],
				'address' => $_POST['address'],
				'status' => $_POST['status'] + 0,
				'sort' => $_POST['sort'] + 0,
				'time' => time()
				);
			if(M('blogroll')->add($data)){
				$this->success('添加成功', U(GROUP_NAME . '/Blogroll/index'));
			}else{
				$this->error('添加失败');
			}
		}

	}