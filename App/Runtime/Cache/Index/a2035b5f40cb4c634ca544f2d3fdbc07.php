<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/JavaScript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='__PUBLIC__/Js/common.js'></script>
<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
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
<!--主体-->
	<div class='main'>
		<div class='main-left'>
			<p>后盾博文</p>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
			<dl>
				<dt>PHP<a href="">更多>></a></dt>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
				<dd>
					<a href="">对象的产生与生命周期</a>
					<span>06/06</span>
				</dd>
			</dl>
		</div>
	<div class='main-right'>
	<?php echo W('ShowHot', array('limit' => 5));?>
	<?php echo W('ShowNew', array('limit' => 5));?>
		
			<dl>
				<dt>test自定义标签</dt>
				<?php $field = array("id", "title", "click");$_new_list = M("blog")->field($field)->order("time DESC")->limit(5)->select();foreach($_new_list as $_new_v):extract($_new_v);$url = U("/" . $id);?><dd>
						<a href="<?php echo ($url); ?>"><?php echo ($title); ?></a>
						<span>(<?php echo ($click); ?>)</span>
					</dd><?php endforeach; ?>
			</dl>
		
			<dl>
				<dt>友情连接</dt>
				<dd>
					<a href="">后盾网</a>
				</dd>

				<dd>
					<a href="">后盾网论坛</a>
				</dd>
				<dd>
					<a href="">后盾网学习社区</a>
				</dd>
			</dl>
		</div>
	</div>
	<div class='bottom'>
		<div></div>
	</div>
</body>
</html>