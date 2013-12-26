<?php

	class BlogRelationModel extends RelationModel
	{	
		//主表名称
		protected  $tableName = 'blog';

		//关联模型
		protected $_link = array(
			'attr' => array(
				'mapping_type' => MANY_TO_MANY, // 多对多关系
				'foreign_key' => 'bid', // 主表在中间表名称
				'relation_foreign_key' => 'aid', // 附表在中间表名称
				'relation_table' => 'bl_blog_attr', // 中间表名称
				),
			'cate' => array(
				'mapping_type' => BELONGS_TO,
				'foreign_key' => 'cid',
				'mapping_fields' => 'name', // 从表查询的字段
				'as_fields' => 'name:cate',
				),
			);

		/**
		 * 获取b博文信息
		 * @param  int $type 0 bloglist 1:回收站的内容
		 * @return array       [description]
		 */
		public function getBlogList($type = 0){
			$field = array('content','del');
			$where = array('del' => $type);
			return $this->relation(true)->field($field, true)->where($where)->select();
		}
	}