<div id="<?php echo $a['id_wrap'];?>">
    <?php if($a['bx_if:display_header']['condition']){ ?>
        <div class="bx-grid-header<?php echo $a['bx_if:display_header']['content']['class'];?>">
        	<div class="bx-grid-header-cnt bx-def-padding-sec-bottom">
	            <?php if($a['bx_if:display_header']['content']['bx_if:filter']['condition']){ ?>
	                <div class="bx-grid-header-controls-filter">
	                    <?php echo $a['bx_if:display_header']['content']['bx_if:filter']['content']['controls'];?>
	                </div>  
	            <?php } ?>
                    <?php if($a['bx_if:display_header']['content']['bx_if:counter']['condition']){ ?>
                        <div class="bx-grid-header-controls-counter bx-def-margin-thd-leftright">
                            <span class="bx-grid-header-controls-counter-value"><?php echo $a['bx_if:display_header']['content']['bx_if:counter']['content']['counter'];?></span>
                        </div>
                    <?php } ?>
	            <?php if($a['bx_if:display_header']['content']['bx_if:actions_independent']['condition']){ ?>
	                <div class="bx-grid-header-controls-independent">
	                    <?php echo $a['bx_if:display_header']['content']['bx_if:actions_independent']['content']['actions_independent'];?>
	                </div>
	            <?php } ?>
                </div>
        </div>
    <?php } ?>
    <div class="bx-grid-table-wrapper2 bx-grid-table-hide-shadow-before <?php echo $a['class_table_wrapper'];?>">
        <div id="<?php echo $a['id_cont'];?>" class="bx-grid-table-wrapper">
            <table id="<?php echo $a['id_table'];?>" class="bx-grid-table">
                <?php if($a['bx_if:display_head']['condition']){ ?>
                    <thead>
                        <tr class="bx-grid-table-row-hr">
                            <td colspan="<?php echo $a['bx_if:display_head']['content']['columns'];?>"><hr class="bx-def-hr" /></td>
                        </tr>                    
                        <tr>
                            <?php if(is_array($a['bx_if:display_head']['content']['bx_repeat:row_header'])) for($i=0; $i<count($a['bx_if:display_head']['content']['bx_repeat:row_header']); $i++){ ?>
                                <?php echo $a['bx_if:display_head']['content']['bx_repeat:row_header'][$i]['header_cell'];?>
                            <?php } else if(is_string($a['bx_if:display_head']['content']['bx_repeat:row_header'])) echo $a['bx_if:display_head']['content']['bx_repeat:row_header']; ?>
                        </tr>
                        <tr class="bx-grid-table-row-hr">
                            <td colspan="<?php echo $a['bx_if:display_head']['content']['columns'];?>"><hr class="bx-def-hr" /></td>
                        </tr>
                    </thead>
                <?php } ?>
                <tbody>
                        <?php if(is_array($a['bx_repeat:rows_data'])) for($i=0; $i<count($a['bx_repeat:rows_data']); $i++){ ?>
                            <tr id="<?php echo $a['bx_repeat:rows_data'][$i]['id_row'];?>" class="<?php echo $a['bx_repeat:rows_data'][$i]['row_class'];?>">
                                <?php echo $a['bx_repeat:rows_data'][$i]['row'];?>
                            </tr>
                        <?php } else if(is_string($a['bx_repeat:rows_data'])) echo $a['bx_repeat:rows_data']; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php if($a['bx_if:display_footer']['condition']){ ?>
        <div class="bx-grid-footer ">
            <hr class="bx-def-hr" />
            <div class="bx-grid-footer-cnt bx-def-padding-sec-top bx-def-margin-thd-neg bx-clearfix">
                <?php if($a['bx_if:display_footer']['content']['bx_if:actions_bulk']['condition']){ ?>
                    <div style="float:left;">
                        <?php echo $a['bx_if:display_footer']['content']['bx_if:actions_bulk']['content']['actions_bulk'];?>
                    </div>
                <?php } ?>
    
                <div class="bx-def-margin-thd" style="float:right;">
                    <?php echo $a['bx_if:display_footer']['content']['paginate'];?>
                </div>
            </div>
        </div>
    <?php } ?>    
</div>

<script>
    $(document).ready(function() {
        if (typeof(glGrids) == 'undefined')
            glGrids = {};
        if (undefined == glGrids.<?php echo $a['object'];?>) {
            glGrids.<?php echo $a['object'];?> = new BxDolGrid('<?php echo $a['object'];?>', {
                csrf_token: '<?php echo $a['csrf_token'];?>',
                sortable: <?php echo $a['sortable'];?>,
                sorting: <?php echo $a['sorting'];?>,
                paginate_get_start: '<?php echo $a['paginate_get_start'];?>',
                paginate_get_per_page: '<?php echo $a['paginate_get_per_page'];?>',
                start: <?php echo $a['start'];?>,
                per_page: <?php echo $a['per_page'];?>,
                filter: '<?php echo $a['filter'];?>',
                filter_get: '<?php echo $a['filter_get'];?>',
                order_field: '<?php echo $a['order_field'];?>',
                order_dir: '<?php echo $a['order_dir'];?>',
                order_get_field: '<?php echo $a['order_get_field'];?>',
                order_get_dir: '<?php echo $a['order_get_dir'];?>',
                text_search_input: 'Search...',
                popup_options: <?php echo $a['popup_options'];?>,
                query_append: <?php echo $a['query_append'];?>,
                confirm_messages: <?php echo $a['confirm_messages'];?>,
                columns: <?php echo $a['columns'];?>
            });
        }
        else
            glGrids.<?php echo $a['object'];?>.init({
                start: <?php echo $a['start'];?>,
                per_page: <?php echo $a['per_page'];?>,
                filter: '<?php echo $a['filter'];?>',
                query_append: <?php echo $a['query_append'];?>
            });
    });
</script>