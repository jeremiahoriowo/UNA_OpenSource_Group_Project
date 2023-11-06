<!-- layout top area 3 columns [ start ] -->
<div id="<?php echo $a['page_id'];?>" class="bx-layout-wrapper bx-layout-top-area-3-columns">
        <div class="bx-layout-row">
        <div class="bx-layout-col bx-layout-1-column-column1 bx-layout-column-fullwidth w-full">
            <div class="bx-layout-cell" id="bx-layout-cell-1">
                <?php echo $a['cell_1'];?>
            </div>
        </div>
    </div>

    <div class="bx-layout-row" >
        <section class="bx-layout-col bx-layout-bcb-bar1 bx-layout-column-thin md:w-1/3 flex-auto md:flex-none md:pr-4 lg:pr-6" aria-label="Sidebar">
            <div class="bx-layout-cell" id="bx-layout-cell-2">
                <?php echo $a['cell_2'];?>
            </div>
        </section>
        <section aria-label="Content" class="max-w-full md:w-2/3 flex-1 flex flex-wrap lg:flex-nowrap bx-layout-gap" >
            <main class="bx-layout-col bx-layout-bcb-content bx-layout-column-half flex-auto lg:flex-none lg:w-1/2 lg:pr-6" aria-label="Main">
                <div class="bx-layout-cell" id="bx-layout-cell-3">
                    <?php echo $a['cell_3'];?>
                </div>
            </main>
            <aside class="bx-layout-col bx-layout-bcb-bar2 bx-layout-column-thin flex-auto lg:w-1/2 " aria-label="Aside">
                <div class="bx-layout-cell" id="bx-layout-cell-4">
                    <?php echo $a['cell_4'];?>
                </div>
            </aside>
        </section>
    </div>
    <?php if($a['bx_if:show_layout_row_dump']['condition']){ ?>
    <div class="bx-layout-row bx-lr-dump bx-clearfix">
        <div class="bx-layout-col bx-layout-1-column-column1 bx-layout-column-fullwidth">
            <div class="bx-layout-cell bx-def-margin-topbottom" id="bx-layout-cell-0">
                <div class="bx-layout-cell-title bx-def-margin-thd-bottom">Inactive Blocks</div>
                <?php echo $a['bx_if:show_layout_row_dump']['content']['cell_0'];?>
            </div>
        </div>
    </div>
<?php } ?>
</div>
<!-- layout top area 3 columns [  end  ] -->