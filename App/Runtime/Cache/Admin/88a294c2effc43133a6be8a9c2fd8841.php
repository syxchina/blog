<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
</head>
    <body>
    	<form action="<?php echo U(GROUP_NAME . '/Attribute/addAttrHandle');?>" method="post">
    		<table class="table">
    			<tr>
    				<th colspan="2">添加博文属性</th>
    			</tr>
    			<tr>
    				<td align="right">博文属性名字</td>
    				<td><input type="text" name="name" /></td>
    			</tr>
    			<tr>
    				<td align="right">标题颜色</td>
    				<td><input type="text" name="color" /></td>
    			</tr>
    			<tr>
    				<td colspan="2" align="center"><input type="submit" value="保存添加" /></td>
    			</tr>
    		</table>
    	</form>
    </body>
</html>