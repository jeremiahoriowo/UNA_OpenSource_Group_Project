<div class="bx-std-pt-cnt bx-clearfix">
	<div class="bx-std-pt-pages"><?php echo $a['selector'];?></div>
	<div class="bx-std-pt-buttons">
	    <button class="bx-btn bx-def-margin-sec-left" onclick="javascript:<?php echo $a['js_object'];?>.performAction('<?php echo $a['action_page_create'];?>');">Add New Page</button>
	    <?php if($a['bx_if:show_actions']['condition']){ ?>
                <?php if($a['bx_if:show_actions']['content']['bx_if:can_view']['condition']){ ?>
                    <button class="bx-btn bx-def-margin-sec-left" onclick="javascript:window.open('<?php echo $a['bx_if:show_actions']['content']['bx_if:can_view']['content']['url_view'];?>','_blank');">View Page</button>
                <?php } ?>
	        <button class="bx-btn bx-def-margin-sec-left" onclick="javascript:<?php echo $a['bx_if:show_actions']['content']['js_object'];?>.performAction('<?php echo $a['bx_if:show_actions']['content']['action_page_edit'];?>')">Settings</button>
	        <button class="bx-btn bx-def-margin-sec-left" onclick="javascript:<?php echo $a['bx_if:show_actions']['content']['js_object'];?>.performAction('<?php echo $a['bx_if:show_actions']['content']['action_block_create'];?>')">Add Blocks</button>
	        <?php if($a['bx_if:show_actions']['content']['bx_if:can_delete']['condition']){ ?>
	            <button class="bx-btn bx-def-margin-sec-left" onclick="javascript:<?php echo $a['bx_if:show_actions']['content']['bx_if:can_delete']['content']['js_object'];?>.deletePage();">Delete</button>
	        <?php } ?>
	    <?php } ?>
	</div>
</div>