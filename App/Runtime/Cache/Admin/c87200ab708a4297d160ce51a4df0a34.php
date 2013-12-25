<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<script type="text/javascript">
	window.UEDITOR_HOME_URL = '__ROOT__/Data/ueditor/';
	window.onload = function(){
		window.UEDITOR_CONFIG.initialFrameWidth = 1200;
		window.UEDITOR_CONFIG.initialFrameHeight = 600;
		window.UEDITOR_CONFIG.imageUrl = "<?php echo U(GROUP_NAME . '/Blog/uploadImage');?>";
		window.UEDITOR_CONFIG.imagePath = "__ROOT__/upload/";
		UE.getEditor('content');
	}
</script>
<script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="__ROOT__/Data/ueditor/ueditor.all.min.js"></script>
</head>
    <body>
    	<form action="<?php echo U(GROUP_NAME . '/Blog/addBlogHandle');?>">
	    	<table class="table">
	  		  	<tr>
	  		  		<th colspan="2">发表博文</th>
	  		  	</tr>
	  		  	<tr>
	  		  		<td align="right">所属栏目</td>
	  		  		<td>
	  		  			<select name="cid" >
	  		  				<option value="">======请选择栏目======</option>
	  		  				<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
	  		  			</select>
	  		  		</td>
	  		  	</tr>
	  		  	<tr>
	  		  		<td align="right">博文属性</td>
	  		  		<td>
	  		  			<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><label style="margin-right:10px">
	  		  					<input type="checkbox" name="attr[]" value="<?php echo ($v["id"]); ?>" />&nbsp;<?php echo ($v["name"]); ?>
	  		  				</label><?php endforeach; endif; ?>
	  		  		</td>
	  		  	</tr>
	  		  	<tr>
	  		  		<td align="right">博文标题</td>
	  		  		<td><input type="text" name="title" /></td>
	  		  	</tr>
	  		  	<tr>
	  		  		<td colspan="2">
	  		  			<textarea name="content" id="content" ></textarea>
	  		  		</td>
	  		  	</tr>
	  		  	<tr>
	  		  		<td colspan="2" align="center"><input type="submit" value="保存添加" /></td>
	  		  	</tr>
	    	</table>
    	</form>
    </body>
</html>