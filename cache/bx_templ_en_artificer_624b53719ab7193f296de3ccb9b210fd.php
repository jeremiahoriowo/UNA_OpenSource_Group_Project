<div  id="<?php echo $a['id'];?>" class="bx-popup-wrapper bx-popup-responsive bx-popup-trans-wrapper box-border <?php echo $a['wrapper_class'];?>" style="<?php echo $a['wrapper_style'];?>" role="alert">
    <div class="bx-popup-gap mx-4 my-px">
        <div class="bx-popup bx-popup-trans bx-popup-border bx-popup-color-bg">
            <div class="bx-popup-close-wrapper bx-def-media-desktop-hide bx-def-media-tablet-hide relative pt-2 px-2 text-right">
                <a href="javascript:void(0);" class="bx-popup-element-close flex items-center justify-center w-6 h-6 text-base text-gray-800 dark:text-gray-100">
                    <div class="bx-icon bx-icon-close">
                        <i class="sys-icon times "></i>
                    </div>
                </a>
            </div>
            <div class="bx-popup-content overflow-hidden"><?php echo $a['content'];?></div>
            <!-- Footer is needed for Safari in iOS -->
            <!-- <div class="bx-popup-footer-wrapper bx-def-media-desktop-hide bx-def-media-tablet-hide p-3 md:p-4 lg:p-6">&nbsp;</div> -->
        </div>
    </div>
</div>