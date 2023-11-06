<div class="bx-sidebar bx-sidebar-account bx-def-z-index-modal fixed flex justify-end inset-0" role="dialog" aria-modal="true">
    <div class="bx-sidebar-account-bg fixed inset-0 bg-gray-600 opacity-75" aria-hidden="true"></div>
    <div class="flex-shrink-0 w-14" aria-hidden="true"></div>
    <div class="bx-sidebar-cnt relative flex max-w-xs w-full py-4 bg-white dark:bg-gray-900">
        <div class="absolute top-0 left-0 -ml-12 pt-2">
            <button type="button" class="bx-sidebar-account-close ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                <span class="sr-only">Close sidebar</span>
                <div class="bx-icon bx-icon-close text-white">
                    <i class="sys-icon times "></i>
                </div>
            </button>
        </div>
        <?php if($a['bx_if:color_scheme_switcher']['condition']){ ?>
            <div class="bx-sb-theme-switcher absolute h-10 right-4 leading-10">
                <a class="hover:no-underline" href="javascript:" onclick="oBxArtificerUtils.getColorSchemeMenu()"><i class="sys-icon desktop"></i></a>
            </div>
            <?php echo $a['bx_if:color_scheme_switcher']['content']['popup'];?>
        <?php } ?>
        <div class="bx-menu-account-popup bx-menu-object-<?php echo $a['ap_menu_object'];?> flex flex-col w-full">
            <?php if(is_array($a['bx_repeat:ap_menu_items'])) for($i=0; $i<count($a['bx_repeat:ap_menu_items']); $i++){ ?>
                <div class="bx-menu-account-popup-<?php echo $a['bx_repeat:ap_menu_items'][$i]['name'];?>"><?php echo $a['bx_repeat:ap_menu_items'][$i]['item'];?></div>
            <?php } else if(is_string($a['bx_repeat:ap_menu_items'])) echo $a['bx_repeat:ap_menu_items']; ?>
        </div>
    </div>
</div>