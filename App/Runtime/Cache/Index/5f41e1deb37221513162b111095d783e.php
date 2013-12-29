<?php if (!defined('THINK_PATH')) exit();?>
			<dl>
				<dt>最发布发</dt>
				<?php if(is_array($newList)): foreach($newList as $key=>$vnew): ?><dd>
						<a href="<?php echo U('/' . $vnew['id']);?>"><?php echo ($vnew["title"]); ?></a>
						<span>(<?php echo ($vnew["click"]); ?>)</span>
					</dd><?php endforeach; endif; ?>
			</dl>