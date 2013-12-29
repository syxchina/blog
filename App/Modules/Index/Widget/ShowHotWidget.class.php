<?php
	
	class ShowHotWidget extends Widget
	{
		public function render($data){
			$field = array('id', 'title', 'click');
			$data['hotList'] = M('blog')->field($field)->order('click DESC')->limit($data['limit'])->select();
			return $this->renderFile('', $data);
		}
	}