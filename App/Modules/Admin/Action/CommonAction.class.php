<?php 
	/**
	 * 后台公共控制器
	 */

	class CommonAction extends Action
	{
		public function _initialize(){
			if(!isset($_SESSION['uid'])){
				$this->redirect(GROUP_NAME . '/Login/index');
			}
		}

	}

?>