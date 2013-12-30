<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
		<head>
		<title>新建网页</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
		<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript">
			var sendUrl = "<?php echo U(GROUP_NAME . '/Blog/clearTrash');?>";
			$(function(){
				$("input[type='button']").click(function(){
					if(!confirm('是否要全部清空')){
						return;
					}
					$.post(sendUrl,{method:'sure'},function(data){
						if(data.success == 'ok'){
							$("tr[name='info']").remove();
						}
					},'json')
				});
			});
		</script>
		</head>
		    <body>
		    	<table class="table">
		    		<tr>
		    			<th>ID</th>
		    			<th>标题</th>
		    			<th>栏目</th>
		    			<th>点击次数</th>
		    			<th>发布时间</th>
		    			<th>操作</th>
		    		</tr>
		    		<?php if(is_array($blog)): foreach($blog as $key=>$v): ?><tr name="info">
		    			<td width="8%"><?php echo ($v["id"]); ?></td>
		    			<td><?php echo ($v["title"]); ?>
		    				<?php if(is_array($v["attr"])): foreach($v["attr"] as $key=>$value): ?><strong style="color:<?php echo ($value["color"]); ?>;padding:0 5px;">[<?php echo ($value["name"]); ?>]</strong><?php endforeach; endif; ?>
		    			</td>
		    			<td width="12%"><?php echo ($v["cate"]); ?></td>
		    			<td width="12%"><?php echo ($v["click"]); ?></td>
		    			<td widht="12%"><?php echo (date('y-m-d H:i', $v["time"])); ?></td>
		    			<td width="20%">
		    				<?php if(ACTION_NAME == index): ?>[<a href="#">修改</a>]
		    				[<a href="<?php echo U(GROUP_NAME . '/Blog/toTrach', array('id' => $v['id'], 'type' => 1));?>">删除</a>]
		    				<?php else: ?>
		    					[<a href="<?php echo U(GROUP_NAME . '/Blog/toTrach', array('id' => $v['id'], 'type' => 0));?>">还原</a>]
		    					[<a href="<?php echo U(GROUP_NAME . '/Blog/delete', array('id' => $v['id']));?>">彻底删除</a>]<?php endif; ?>
		    			</td>
		    		</tr><?php endforeach; endif; ?>
		    		<?php if(ACTION_NAME == trach): ?><tr>
			    			<td colspan ="6" align="center"><input type="button" value="清空回收站"/></td>
			    		</tr><?php endif; ?>
		    	</table>
		    </body>
		</html>