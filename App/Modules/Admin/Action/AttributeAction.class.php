<?php 
	/**
	 *
	 */
	class AttributeAction extends CommonAction{


		// 显示属性列表
		public function index(){
			$attr = M('attr')->select();
			$this->attr = $attr;
			$this->display();
		}
		
		// 增加属性
		public function addAttr(){

			$this->display();
		}

		// 增加属性表单处理
		public function addAttrHandle(){
			if(M('attr')->add($_POST)){
				$this->success('添加成功', U(GROUP_NAME . '/Attribute/index'));
			}else{
				$this->error('添加失败');
			}

		}
	} 
	

?>