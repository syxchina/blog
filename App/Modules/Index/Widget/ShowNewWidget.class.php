<?php

	class ShowNewWidget extends Widget
	{
		public function render($data){
			$field = array('id', 'title', 'click');
			$data['newList'] = M('blog')->field($field)->where(array('del' => 0))->order('time DESC')->limit($data['limit'])->select();
			return $this->renderFile('', $data);	
		}
	}