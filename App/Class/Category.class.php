<?php 
	/**
	 * 栏目无限级分类
	 */

	class Category
	{
		// 组合一维数组
		static public function unlimitedForLevel($cate, $html = '--', $pid = 0, $level = 0){
			$tree = array();
			foreach($cate as $v){
				if($v['pid'] == $pid){
					$v['level'] = $level + 1;
					$v['html'] = str_repeat($html, $level);
					$tree[] = $v;
					$tree = array_merge($tree, self::unlimitedForLevel($cate, $html, $v['id'], $level + 1));
				}
			}
			return $tree;
		}

		// 组合二维数组
		static public function unlimitedForLayer($cate, $pid = 0){
			$tree = array();
			foreach($cate as $v){
				if($v['pid'] == $pid){
					$v['child'] = self::unlimitedForLayer($cate, $v['id']);
					$tree[] = $v;
				}
			}
			return $tree;
		}

		// 迭代获取家谱树
		static public function getParents($cate, $id){
			$tree = array();
			while($id != 0){
				foreach($cate as $v){
					if($v['id'] == $id){
						$tree[] = $v;
						$id = $v['pid'];		
					}
				}
			}
			return $tree;
		}

		// 递归获取家谱树
		static public function getParent($cate, $id){
			$tree = array();
			foreach($cate as $v){
				if($v['id'] == $id){
					$tree[] = $v;
					$tree = array_merge(self::getParent($cate, $v['pid']), $tree);
				}
			}
			return $tree;
		}

		// 传递一个父级id 回去所有的子类id
		static public function getChildId($cate, $pid){
			$tree = array();
			foreach($cate as $v){
				if($v['pid'] == $pid){
					$tree[] = $v['id'];
					$tree = array_merge($tree, self::getChildId($cate, $v['id']));
				}
			}
			return $tree;
		}

		// 传递一个父级id 回去的子类
		static public function getChild($cate, $pid = 0){
			$child = array();
			foreach($cate as $v){
				if($v['pid'] == $pid){
					$child[] = $v;
				}
			}
			return $child;
		}
	}
	

?>