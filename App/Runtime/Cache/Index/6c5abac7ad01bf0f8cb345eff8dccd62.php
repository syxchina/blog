<?php if (!defined('THINK_PATH')) exit();?>			<dl>
				<dt>Widget</dt>
				<?php if(is_array($blogroll)): foreach($blogroll as $key=>$v): ?><dd>
						<a href="<?php echo ($v["address"]); ?>"><?php echo ($v["name"]); ?></a>
					</dd><?php endforeach; endif; ?>
			</dl>