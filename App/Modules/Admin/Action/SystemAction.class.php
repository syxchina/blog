<?php 
	/**
	 * 系统设置控制后期
	 */
	class SystemAction extends CommonAction
	{	
		//验证码配置
		public function verify(){
			$this->display();
		}

		public function updateVerify(){
			if((F('verify', $_POST, CONF_PATH))){
				$this->success('修改成功', U(GROUP_NAME . '/System/verify'));
			}else{
				$this->error('请检查' . CONF_PATH . '/verify是否给权限');
			}
		}

		//水印配置
		public function water(){
			$this->display();
		}

		public function updateWater(){
			$str = '<?php return ' . var_export($_POST,true) . ';?>';
			file_put_contents(CONF_PATH . 'water.php', $str);
			$this->success('修改成功', U('water'));
			
		}
	}
	

?>