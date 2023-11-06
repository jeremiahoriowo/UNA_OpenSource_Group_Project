<?php echo $a['content'];?>
<script defer language="javascript">
	var <?php echo $a['js_object'];?> = new BxDolStudioBuilderPage({
	    sActionUrl: '<?php echo $a['action_url'];?>',
	    sPageUrl: '<?php echo $a['page_url'];?>',
	    sType: '<?php echo $a['type'];?>',
	    sPage: '<?php echo $a['page'];?>',
	    oHtmlIds: <?php echo $a['html_ids'];?>,
	    oLanguages: <?php echo $a['languahes'];?>
	});
</script>