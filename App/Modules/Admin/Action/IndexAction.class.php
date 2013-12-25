<?php 
	/**
	 * 后台首页
	 */

	class IndexAction extends CommonAction
	{
		public function index(){
			$this->display();
		}

		public function logout(){
			session_unset();
			session_destroy();
			header('content-type:text/html;charset=utf-8');
			$this->redirect(GROUP_NAME . '/Login/index','',3,'退出成功!<br/>3秒自动跳转<br/>');
		}
	}

?>