<?php 
	/**
	 *
	 */

	class BlogAction extends CommonAction
	{	
		//博文列表
		public function index(){
			$this->blog = D('BlogRelation')->getBlogList();
			$this->display();
		}

		// 增加博文
		public function addBlog(){
			import('Class.Category', APP_NAME);
			// 显示栏目
			$cate = M('cate')->order('sort')->select();
			$this->cate = Category::unlimitedForLevel($cate, '&nbsp;&nbsp;--');
			//显示属性
			$this->attr = M('attr')->select();
			$this->display();
		}

		// 显示回收站的neirong
		public function trach(){
			$this->blog = D('BlogRelation')->getBlogList(1);
			$this->display('index');
		}

		// blog 删除//还原
		public function toTrach(){
			$id = $_GET['id'] + 0;
			$del = $_GET['type'] + 0;
			$msg = $del ? '删除' : '还原';
			$data = array(
				'id' => $id,
				'del' => $del,
				);
			if(M('blog')->save($data)){
				$this->success($msg . '成功', U('index'));
			}else{
				$this->error($msg . '失败');
			}
		}

		// 彻底删除blog
		public function delete(){
			$id = $_GET['id'] + 0;
			//D('BlogRelation')->relation(true)->delete($id); 删除会清空bl_blog_attr表
			if(M('blog')->delete($id)){
				M('blog_attr')->where(array('bid' => $id))->delete();
				$this->success('删除成功', U('trach'));
			}else{
				$this->error('删除失败');
			}
		}

		// 增加博文表单处理
		public function  addBlogHandle(){
			$data = array(
				'title' => $_POST['title'],
				'content' => $_POST['content'],
				'time' => time(),
				'click' => $_POST['click'] + 0,
				'cid' => $_POST['cid'] + 0,
				);
			if($bid = M('blog')->add($data)){
				if(isset($_POST['attr'])){
					$sql = 'INSERT INTO ' . C('DB_PREFIX') . 'blog_attr (bid,aid) values ';
					foreach ($_POST['attr'] as $v) {
						$sql .= '(' . $bid . ',' . $v .'),';
					}
					$sql = rtrim($sql,',');
					M('blog_attr')->query($sql);
				}
				$this->success('发表成功', U('index'));
			}else{
				$this->error('发表失败');
			}
		}

		// 百度编辑器上传图片处理
		/**
	     * 向浏览器返回数据json数据
	     * {
	     *   'url'      :'a.jpg',   //保存后的文件路径
	     *   'title'    :'hello',   //文件描述，对图片来说在前端会添加到title属性上
	     *   'original' :'b.jpg',   //原始文件名
	     *   'state'    :'SUCCESS'  //上传状态，成功时返回SUCCESS,其他任何值将原样返回至图片上传框中
	     * }
	     */	
		public function uploadImage(){
			if(isset($_GET['fetch'])){
				echo 'updateSavePath(["upload"])';
				return ;
			}
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();
			//配置
    		$upload->autoSub = true;
    		$upload->subType = 'date';
    		$upload->dateFormat = 'Ym';
    		// 保存路径
    		if($upload->upload('./upload/')){
    			$info = $upload->getUploadFileInfo();
    			//导入水印类
    			import('Class.Image', APP_NAME);
    			$model = C('WATER_MODEL');
    			$model = empty($model) ? 'text' : 'water';
    			Image::$model('./upload/' . $info[0]['savename']);

    			//返回数据
    			$data = array(
    				'url' => $info[0]['savename'],
    				'title' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),
    				'original' => $info[0]['name'],
    				'state' => 'SUCCESS'
    				);
    			echo json_encode($data);
    		}else{
    			echo json_encode(array(
    				'state' => $upload->getErrorMsg()
    				));
    		}
		}
		 
		
	}

