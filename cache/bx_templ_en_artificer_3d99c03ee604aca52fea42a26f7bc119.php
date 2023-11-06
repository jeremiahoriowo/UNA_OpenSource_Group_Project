<div class="bx-sidebar bx-sidebar-site bx-def-z-index-modal fixed flex lg:hidden inset-0" role="dialog" aria-modal="true">
    <div class="bx-sidebar-site-bg fixed inset-0 bg-gray-600 opacity-75" aria-hidden="true"></div>
    <div class="bx-sidebar-cnt relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-white dark:bg-gray-900">
        <div class="absolute top-0 right-0 -mr-12 pt-2">
            <button type="button" class="bx-sidebar-site-close ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                <span class="sr-only">Close sidebar</span>
                <div class="bx-icon bx-icon-close text-white">
                    <i class="sys-icon times "></i>
                </div>
            </button>
        </div>
        <div class="bx-sidebar-site-logo flex-shrink-0 flex items-center px-4"><?php echo $this->parseSystemKey('main_logo', $mixedKeyWrapperHtml);?></div>
        <div class="mt-5 flex-1 h-0 overflow-y-auto">
            <nav class="px-2 space-y-1">
                <?php echo $this->getMenu('bx_artificer_sidebar_site'); ?>
            </nav>
        </div>
    </div>
    <div class="flex-shrink-0 w-14" aria-hidden="true"></div>
</div>