<script language="javascript">
    $(document).ready(function () {
		if (aDolOptions.sys_fixed_header !== undefined && aDolOptions.sys_fixed_header != 'on'){
			// hide toolbar on scrolldown, show - on scroll up
			var oToolbar = $('#bx-toolbar');
			if(oToolbar && oToolbar.length > 0)
				new Headroom(oToolbar.get(0), {
					tolerance: {
						down: 10,
						up: 20
					},
					offset: 200,
					classes: {
						initial: "bx-toolbar-anim",
						pinned: "bx-toolbar-reset",
						unpinned: "bx-toolbar-up"
					},
					onUnpin: function() {
						bx_menu_slide_close_all_opened();
					}
				}).init();
		}
    });
</script>