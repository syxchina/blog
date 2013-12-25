<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
</head>
    <body>
    	<form action="<?php echo U(GROUP . '/');?>"></form>
    	<table class="table">
    		<tr>
    			<th colspan="2">添加栏目</th>
    		</tr>
    		<tr>
    			<td align="right">栏目名称</td>
    			<td><input type="text" name="name" /></td>
    		</tr>
    		<tr>
    			<td align="right">排序</td>
    			<td><input type="text" name="sort" /></td>
    		</tr>
    		<tr>
    			<td align="center" colspan="2">
    				<input type="hidden" name="pid" value="0"  />
    				<input type="submit" value="保存添加" />
    			</td>
    		</tr>
    	</table>
    </body>
</html>