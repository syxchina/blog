<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
</head>
    <body>
    	<form action="<?php echo U(GROUP_NAME . '/Blogroll/sort');?>" method="post">
	 		<table class="table">
	 			<tr>
	 				<th>id</th>
	 				<th>友情网站名称</th>
	 				<th>友情网站地址</th>
	 				<th>是否显示</th>
	 				<th>排序</th>
	 				<th>添加时间</th>
	 				<th>操作</th>
	 			</tr>
	 			<?php if(is_array($blogroll)): foreach($blogroll as $key=>$v): ?><tr>
	 					<td><?php echo ($v["id"]); ?></td>
	 					<td><?php echo ($v["name"]); ?></td>
	 					<td><?php echo ($v["address"]); ?></td>
	 					<td><?php if($v['status']): ?>显示<?php else: ?>不显示<?php endif; ?></td>
	 					<td><input type="text" name="<?php echo ($v["id"]); ?>" value="<?php echo ($v['sort']); ?>" /></td>
	 					<td><?php echo (date("y-m-d H:i", $v["time"])); ?></td>
	 					<td>[<a href="">修改</a>][<a href="">删除</a>]</td>
	 				</tr><?php endforeach; endif; ?>
	 			<tr>
	 				<td colspan="7" align="center"><input type="submit" value="排序" /></td>
	 			</tr>
	 		</table>
	 	</form>	
    </body>
</html>