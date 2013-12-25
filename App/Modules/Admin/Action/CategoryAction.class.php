<?php 
	/**
	 * 栏目分类控制器
	 */
	class CategoryAction extends CommonAction
	{
		//栏目分类列表
		public function index(){
			import('Class.Category', APP_NAME);
			$cate = M('cate')->order('sort asc')->select();
			$this->cate = Category::unlimitedForLevel($cate,'&nbsp;&nbsp;--');
			$this->display();
		}
		// 出来修改栏目顺序表单
		public function sortCate(){
			$db = M('cate');
			foreach ($_POST as $id => $sort) {
				$db->where(array('id' => $id))->setField('sort', $sort);
			}
			$this->redirect(GROUP_NAME . '/Category/index');
		}

		// 增加栏目
		public function addCate(){
			$this->pid = I('pid', 0, 'intval');
			$this->display();
		}
		// 处理增加栏目表单
		public function runAddCate(){
			if(M('cate')->add($_POST)){
				$this->success('添加成功', U(GROUP_NAME . '/Category/index'));
			}else{
				$this->error('添加失败');
			}
		}

	}
	

?>