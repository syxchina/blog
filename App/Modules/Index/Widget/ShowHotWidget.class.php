<?php
	
	class ShowHotWidget extends Widget
	{
		public function render($data){
			$field = array('id', 'title', 'click');
			$data['hotList'] = M('blog')->field($field)->where(array('del' => 0))->order('click DESC')->limit($data['limit'])->select();
			return $this->renderFile('', $data);
		}
	}