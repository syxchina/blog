<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
	<head>
	<title>新建网页</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
	</head>
	    <body>
	    	<form action="<?php echo U(GROUP_NAME . '/Blogroll/addBlogrollHandle');?>" method="post">
	    		<table class="table">
	    			<tr>
	    				<th colspan="2">添加友情链接</th>
	    			</tr>
	    			<tr>
	    				<td align="right">友情网站名称:</td>
	    				<td><input type="text" name="name" /></td>
	    			</tr>
	    			<tr>
	    				<td align="right">友情网站地址</td>
	    				<td><input type="text" name="address"/></td>
	    			</tr>
	    			<tr>
	    				<td align="right">是否显示</td>
	    				<td><input type="text" name="status" value="1" /></td>
	    			</tr>
	    			<tr>
	    				<td align="right">排序</td>
	    				<td><input type="text" name="sort" value="100" /></td>
	    			</tr>
	    			<tr>
	    				<td colspan="2" align="center"><input type="submit" value="保存提交"/></td>
	    			</tr>
	    		</table>
	    	</form>
	    </body>
	</html>