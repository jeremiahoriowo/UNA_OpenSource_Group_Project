<div id="<?php echo $a['id'];?>" class="bx-popup-wrapper bx-popup-box-wrapper bx-def-box-sizing" style="<?php echo $a['wrapper_style'];?>" role="dialog" aria-describedby="<?php echo $a['id'];?>_title">
    <!--<div class="bx-popup-box-pointer"><i class="bx-popup-border"></i></div>-->
    <div class="bx-popup bx-popup-box bx-popup-width bx-popup-color-bg bx-popup-border bx-def-round-corners">
    <div class="bx-def-round-corners" style="overflow:hidden;">
        <div class="bx-popup-header bx-popup-header-color-bg bx-def-padding bx-def-font-contrasted">
            <h2 id="<?php echo $a['id'];?>_title"><?php echo $a['title'];?></h2>
            <a href="javascript:void(0);" class="bx-popup-element-close bx-def-font-contrasted bx-def-margin">
                <div class="bx-icon bx-icon-close">
                    <i class="sys-icon times "></i>
                </div>
            </a>
        </div>
        <div class="bx-popup-content bx-def-padding"><?php echo $a['content'];?></div>
    </div>
    </div>
</div>