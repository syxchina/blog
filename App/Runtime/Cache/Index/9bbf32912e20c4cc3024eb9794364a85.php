<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/JavaScript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='__PUBLIC__/Js/common.js'></script>
	<link rel="stylesheet" href="__PUBLIC__/Css/show.css" />
	<script type="text/javascript" src=__ROOT__/Data/ueditor/third-party/SyntaxHighlighter/shCore.js></script>
	<script type="text/javascript" src=__ROOT__/Data/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css></script>
	<script type="text/javascript">
		SyntaxHighlighter.all()
	</script>
</head>
<body>
	<div class='top-list-wrap'>
		<div class='top-list'>
			<ul class='l-list'>
				<li><a href="http://www.houdunwang.com" target='_blank'>后盾网</a></li>
				<li><a href="http://bbs.houdunwang.com" target='_blank'>后盾网论坛</a></li>
				<li><a href="http://study.houdunwang.com" target='_blank'>后盾学习社区</a></li>
			</ul>
			<ul class='r-list'>
				<li><a href="http://www.hdphp.com" target='_blank'>HDPHP框架</a></li>
				<li><a href="http://bbs.houdunwang.com" target='_blank'>免费视频教程</a></li>
			</ul>
		</div>
	</div>


	<div class='top-search-wrap'>
		<div class='top-search'>
			<a href="http://bbs.houdunwang.com" target='_blank' class='logo'>
				<img src="__PUBLIC__/Images/logo.png"/>
			</a>
			<div class='search-wrap'>
				<form action="" method='get'>
					<input type="text" name='keyword' class='search-content'/>
					<input type="submit" name='search' value='搜索'/>
				</form>
			</div>
		</div>
	</div>

	<div class='top-nav-wrap'>
		<ul class='nav-lv1'>
			<li class='nav-lv1-li'>
				<a href="__GROUP__" class='top-cate'>博客首页</a>
			</li>
			<?php
 import('Class.Category', APP_NAME); $_nav_cate = M('cate')->order("sort")->select(); $_nav_cate = Category::unlimitedForLayer($_nav_cate); foreach($_nav_cate as $_nav_cate_v): extract($_nav_cate_v); $url = U('/c_' . $id); ?><li class='nav-lv1-li'>
					<a href="<?php echo ($url); ?>" class='top-cate'><?php echo ($name); ?></a>
						<ul>
							<?php if(is_array($child)): foreach($child as $key=>$value): ?><li><a href="<?php echo U('/c_' . $value['id']);?>"><?php echo ($value["name"]); ?></a></li><?php endforeach; endif; ?>
						</ul>
					</if>	
				</li><?php endforeach; ?>
		</ul>
	</div>
	<div class='main'>
		<div class='main-left'>
			
			<div class='location'>
				<a href="__GROUP__">首页</a>>
				<?php $last = count($parents) - 1 ?>
				<?php if(is_array($parents)): foreach($parents as $key=>$v): ?><a href="<?php echo U('/c_' . $v['id']);?>"><?php echo ($v["name"]); ?></a><?php if($last != $key): ?>><?php endif; endforeach; endif; ?>
			</div>
			
				<div class="title">
					<p><?php echo ($blog["title"]); ?></p>
					<div>
						<span class='fl'>发布于：<?php echo (date('Y年m月d日', $blog["time"])); ?></span>
						<span class='fr'>已被阅读<script type="text/javascript" src="<?php echo U(GROUP_NAME . '/Show/clickInc', array('id' => $blog['id']));?>"></script>次</span>
					</div>
				</div>
				<div class='content'>
					<?php echo ($blog["content"]); ?>
				</div>
			
		</div>
	<!--主体右侧-->
		<div class='main-right'>
	<?php echo W('ShowHot', array('limit' => 5));?>
	<?php echo W('ShowNew', array('limit' => 5));?>
		
			<dl>
				<dt>test自定义标签</dt>
				<?php $field = array("id", "title", "click");$where = array("del" => 0);$_new_list = M("blog")->field($field)->where($where)->order("time DESC")->limit(5)->select();foreach($_new_list as $_new_v):extract($_new_v);$url = U("/" . $id);?><dd>
						<a href="<?php echo ($url); ?>"><?php echo ($title); ?></a>
						<span>(<?php echo ($click); ?>)</span>
					</dd><?php endforeach; ?>
			</dl>
		
			<dl>
				<dt>友情连接</dt>
				<?php $field = array("id", "name", "address");$where = array("status" => 1);$_nav_blogroll = M("blogroll")->field($field)->where($where)->order("sort DESC")->limit(10)->select();foreach($_nav_blogroll as $_blogroll_v):extract($_blogroll_v);?><dd>
						<a href="<?php echo ($address); ?>" target="_blank"><?php echo ($name); ?></a>
					</dd><?php endforeach;?>
			</dl>
			<?php echo W('ShowBlogroll', array('limit' => 5, 'order' => 'DESC'));?>
		</div>
	</div>
	</div>	
<!--底部-->
	<div class='bottom'>
		<div></div>
	</div>
</body>
</html>