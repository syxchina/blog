<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
</head>
    <body>
    	<table class="table">
    		<tr>
    			<th>id</th>
    			<th>属性名称</th>
    			<th>属性颜色</th>
    			<th>操作</th>
    		</tr>
    		<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><tr>
    				<td><?php echo ($v["id"]); ?></td>
    				<td><?php echo ($v["name"]); ?></td>
    				<td><div style="width:20px;height:20px;background:<?php echo ($v["color"]); ?>"></div></td>
    				<td>
    					[<a href="#">修改</a>]
    					[<a href="#">删除</a>]
    				</td>
    			</tr><?php endforeach; endif; ?>
    	</table>
    </body>
</html>