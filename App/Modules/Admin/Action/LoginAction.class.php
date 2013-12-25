<?php 
	/**
	 *
	 */

	class LoginAction extends Action
	{
		public function index(){
			$this->display();
		}

		public function login(){
			if(!IS_POST) halt('页面不存在');
			if(I('code', '', 'strtolower') != session('verify')) $this->error('验证码错误');
			$userModel = M('user');
			$user = $userModel->where(array('username' => I('username', '')))->find();
			if(!$user || I('password', '', 'md5') != $user['password']) $this->error('账号或密码错误');
			
			// 跟新登陆信息
			$data = array(
				'id' => $user['id'],
				'logintime' => time(),
				'loginip' => get_client_ip()
				);
			$userModel->save($data);

			// 存入session
			session('uid', $user['id']);
			session('username', $user['username']);
			session('logintime', date('y-m-d H:i', $user['logintime']));
			session('loginip', $user['loginip']);

			header('content-type:text/html;charset=utf-8');
			redirect(__GROUP__, 3, '登陆成功!<br/>3秒后页面自动跳转~');
		}

		/**
		 * y验证码
		 * @return [type] [description]
		 */
		public function verify(){
			import('Class.Image', APP_PATH);
			Image::verify();
		}
	}

?>