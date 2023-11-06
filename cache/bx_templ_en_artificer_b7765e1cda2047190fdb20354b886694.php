<!DOCTYPE html>
<html lang="<?php echo $this->parseSystemKey('lang', $mixedKeyWrapperHtml);?>">
<head>
    <bx_injection:injection_head_begin />

    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->parseSystemKey('page_charset', $mixedKeyWrapperHtml);?>" />
    <meta name="viewport" content="<?php echo $this->parseSystemKey('page_viewport', $mixedKeyWrapperHtml);?>" />
    <title><?php echo $this->parseSystemKey('page_header', $mixedKeyWrapperHtml);?></title>
    <base<?php echo $this->parseSystemKey('base', $mixedKeyWrapperHtml);?> />

    <?php echo $this->parseSystemKey('meta_info', $mixedKeyWrapperHtml);?>
    <?php echo $this->parseSystemKey('page_robots', $mixedKeyWrapperHtml);?>

    <bx_include_css_styles />
    <bx_include_css_system />
    <bx_include_css />

    <?php echo $this->parseSystemKey('dol_images', $mixedKeyWrapperHtml);?>
    <?php echo $this->parseSystemKey('dol_lang', $mixedKeyWrapperHtml);?>
    <?php echo $this->parseSystemKey('dol_options', $mixedKeyWrapperHtml);?>

    <bx_include_js_system />
    <bx_include_js />
   
    <script language="javascript">
    var sUrlRoot = 'http://localhost/UNA-Update/';
    var sLang = '<?php echo $this->parseSystemKey('lang_country', $mixedKeyWrapperHtml);?>';

    $(document).ready(function () {
        bx_time('<?php echo $this->parseSystemKey('lang_country', $mixedKeyWrapperHtml);?>');
        bx_redirect_for_external_links($('.bx-def-vanilla-html'));
    });

    <?php echo $this->parseSystemKey('service_worker', $mixedKeyWrapperHtml);?>

    (function(w) {
        var dpr = (w.devicePixelRatio === undefined ? 1 : Math.round(w.devicePixelRatio));
        if ($.cookie('devicePixelRatio') == dpr || dpr < 2 || (typeof(bIgnorePixelRatio) != "undefined" && bIgnorePixelRatio) || !navigator.cookieEnabled) 
            return;
        $.cookie('devicePixelRatio', dpr, {expires: 365, path: '/'});
        window.location.reload();
    })(window);

    var oMediaPhone = window.matchMedia('<?php echo $this->parseSystemKey('css_media_phone', $mixedKeyWrapperHtml);?>');
    var oMediaPhone2 = window.matchMedia('<?php echo $this->parseSystemKey('css_media_phone2', $mixedKeyWrapperHtml);?>');
    var oMediaTablet = window.matchMedia('<?php echo $this->parseSystemKey('css_media_tablet', $mixedKeyWrapperHtml);?>');
    var oMediaTablet2 = window.matchMedia('<?php echo $this->parseSystemKey('css_media_tablet2', $mixedKeyWrapperHtml);?>');
    var oMediaDesktop = window.matchMedia('<?php echo $this->parseSystemKey('css_media_desktop', $mixedKeyWrapperHtml);?>');

    function fMediaCallback(e) {
        if (oMediaPhone.matches)
            $('html').addClass('bx-media-phone');
        else
            $('html').removeClass('bx-media-phone');
        
        if (oMediaPhone2.matches)
            $('html').addClass('bx-media-phone2');
        else
            $('html').removeClass('bx-media-phone2');
        
        if (oMediaTablet.matches)
            $('html').addClass('bx-media-tablet');
        else
            $('html').removeClass('bx-media-tablet');
        
        if (oMediaTablet2.matches)
            $('html').addClass('bx-media-tablet2');
        else
            $('html').removeClass('bx-media-tablet2');

        if (oMediaDesktop.matches)
            $('html').addClass('bx-media-desktop');
        else
            $('html').removeClass('bx-media-desktop');
    }

    oMediaPhone.addListener(fMediaCallback);
    oMediaPhone2.addListener(fMediaCallback);
    oMediaTablet.addListener(fMediaCallback);
    oMediaTablet2.addListener(fMediaCallback);
    oMediaDesktop.addListener(fMediaCallback);

    fMediaCallback(null);

    var aIncludedCss = <?php echo $this->parseSystemKey('included_css', $mixedKeyWrapperHtml);?>;
    var aIncludedJs = <?php echo $this->parseSystemKey('included_js', $mixedKeyWrapperHtml);?>;

    <?php echo $this->parseSystemKey('socket_engine', $mixedKeyWrapperHtml);?>
</script>
    <script language="javascript">
    var bUseSvgLoading = false;
    var sUseSvgLoading = '';
    if(!bUseSvgLoading) {
        var aSpinnerOpts = {
            lines: 7, // The number of lines to draw
            length: 0, // The length of each line
            width: 8, // The line thickness
            radius: 7, // The radius of the inner circle
            corners: 1, // Corner roundness (0..1)
            rotate: 0, // The rotation offset
            direction: 1, // 1: clockwise, -1: counterclockwise
            color: '#283C50', // #rgb or #rrggbb or array of colors
            speed: 1, // Rounds per second
            trail: 60, // Afterglow percentage
            shadow: false, // Whether to render a shadow
            hwaccel: false, // Whether to use hardware acceleration
            className: 'bx-sys-spinner', // The CSS class to assign to the spinner
            zIndex: 2e9, // The z-index (defaults to 2000000000)
            top: '50%', // Top position relative to parent in px
            left: '50%' // Left position relative to parent in px
        };

        var aSpinnerSmallOpts = $.extend({}, aSpinnerOpts, {
            lines: 6,
            width: 6,
            radius: 4,
            color: '#333',
            top: '50%',
            left: 'calc(100% - 20px)'
        });
    }
</script>

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

    <script language="javascript">
    $(document).ready(function () {
        bx_activate_anim_icons('#283C50');

        var aSidebars = ['site', 'account'];
        for(var i in aSidebars) {
            if(typeof(aSidebars[i]) != 'string')
                continue;

            $('.bx-sidebar-' + aSidebars[i] + '-trigger').on('click', function(event) {
                event.preventDefault();

                var aMatches = $(this).attr('class').match(/bx-sidebar-(.*)-trigger/);
                if(!aMatches || aMatches.length != 2)
                    return;

                bx_sidebar_toggle(aMatches[1]);
            });

            $('.bx-sidebar .bx-sidebar-' + aSidebars[i] + '-bg').on('click', function(event){
                event.preventDefault();

                var aMatches = $(this).attr('class').match(/bx-sidebar-(.*)-bg/);
                if(!aMatches || aMatches.length != 2)
                    return;
                
                bx_sidebar_toggle(aMatches[1]);
            });

            $('.bx-sidebar .bx-sidebar-' + aSidebars[i] + '-close').on('click', function(event){
                event.preventDefault();

                var aMatches = $(this).attr('class').match(/bx-sidebar-(.*)-close/);
                if(!aMatches || aMatches.length != 2)
                    return;

                bx_sidebar_toggle(aMatches[1]);
            });
        }
    });

    function bx_sidebar_get(sType) {
        return $('.bx-sidebar.bx-sidebar-' + sType);
    }

    function bx_sidebar_active(sType) {
        var oSidebar = bx_sidebar_get(sType);
        if(!oSidebar || oSidebar.length == 0)
            return false;

        return oSidebar.hasClass('bx-sidebar-active');
    }
    
    function bx_sidebar_toggle(sType) {
        var oSidebar = bx_sidebar_get(sType);
        oSidebar.toggleClass('bx-sidebar-active', !bx_sidebar_active(sType));
    }

    function bx_sidebar_dropdown_toggle(oLink) {
        $(oLink).parents('.bx-sidebar-item:first').toggleClass('bx-si-dropdown-open').find('.bx-si-dropdown-icon').toggleClass('rotate-0 rotate-90');

        return false;
    }

    function bx_site_search_show(oButtom) {
        var oButton = $(oButtom).parents('.bx-ti-search-button');
        oButton.addClass('bx-tis-button-hidden');

        var oBox = oButton.parents('.bx-ti-search').find('.bx-ti-search-box');
        oBox.addClass('bx-tis-box-shown');

        setTimeout(function () {
            $(document).on('click.bx-site-search-phone touchend.bx-site-search-phone', function (event) {
                if ($(event.target).parents('.sys-search-results-quick,.bx-ti-search-box,.bx-ti-search-button').length || $(event.target).filter('.sys-search-results-quick,.bx-ti-search-box,.bx-ti-search-button').length)
                    event.stopPropagation();
                else {
                    bx_site_search_close_all_opened();
                    oBox.removeClass('bx-tis-box-shown');
                    oButton.removeClass('bx-tis-button-hidden');
                }
            });
        }, 10);
    }

    function bx_site_search_complete(oContainer, oData) {
        if(!oData) {
            if(oContainer.is(':visible'))
                oContainer.hide();

            return;
        }

        oContainer.show();

        setTimeout(function () {
            var iWidthPrev = $(window).width();
            $(window).on('resize.bx-site-search', function () {
                if($(this).width() == iWidthPrev)
                    return;

                iWidthPrev = $(this).width();
                bx_site_search_close_all_opened();
            });
 
            $(document).on('click.bx-site-search touchend.bx-site-search', function (event) {
                if ($(event.target).parents('.sys-search-results-quick').length || $(event.target).filter('.sys-search-results-quick').length || e === event.target)
                    event.stopPropagation();
                else
                    bx_site_search_close_all_opened();
            });

        }, 10);
    }

    function bx_site_search_close_all_opened() {
        $('.sys-search-results-quick:visible').each(function () {
            $(this).hide();
        });
    }
</script>

    <?php echo $this->parseSystemKey('extra_js', $mixedKeyWrapperHtml);?>

    <?php echo $this->parseSystemKey('system_injection_head', $mixedKeyWrapperHtml);?>
    <bx_injection:injection_head />
    <meta name="theme-color" content="#f5faff" />
</head>
<body class="<?php echo $this->parseSystemKey('class_name', $mixedKeyWrapperHtml);?> bx-def-font bx-def-color-bg-page bx-def-image-bg-page <bx_injection:injection_body_class />" dir="<?php echo $this->parseSystemKey('lang_direction', $mixedKeyWrapperHtml);?>" <bx_injection:injection_body /> >
    <?php echo $this->parseSystemKey('system_injection_header', $mixedKeyWrapperHtml);?>
    <bx_injection:injection_header />
    <noscript>
         <div class="p-4 rounded-sm text-center text-red-600 bg-yellow-500 bg-opacity-50">
            <?php echo $this->parseSystemKey('system_js_requred', $mixedKeyWrapperHtml);?>
       </div>
    </noscript>

<div class="bx-main <bx_injection:injection_main_class />">
    <bx_injection:top />
    <div id="bx-toolbar" class="bx-header bx-def-z-index-nav fixed top-0 w-full ring-1 ring-gray-300 dark:ring-gray-700 bg-white/95 dark:bg-gray-800/95 backdrop-blur shadow">
        <div class="bx-header-cnt <?php echo $this->parseSystemKey('sys_header_width', $mixedKeyWrapperHtml);?> mx-auto px-3 md:px-4 lg:px-6 box-border">
            <div class="bx-toolbar-content-wrapper">
                <div id="bx-toolbar-content" class="bx-toolbar-content relative flex items-center justify-start h-16">
                    <!-- Mobile: Hamburger -->
                    <div class="bx-toolbar-item bx-ti-hamburger flex-none items-center lg:hidden mr-4">
                        <?php echo $this->getMenu('sys_toolbar_site'); ?>
                    </div>

                    <div class="bx-toolbar-items-group relative flex flex-1 items-center justify-start h-16">
                        <!-- Logo -->
                        <div id="bx-logo-container" class="bx-toolbar-item bx-ti-left bx-ti-logo flex-none items-center">
                            <bx_injection:injection_logo_before />
                            <?php echo $this->parseSystemKey('main_logo', $mixedKeyWrapperHtml);?>
                            <bx_injection:injection_logo_after />
                        </div>
                        <!-- Menu -->
                        <div class="bx-toolbar-item bx-ti-menu flex-2 hidden lg:block w-64 ml-4">
                            <div id="bx-menu-toolbar-1-container" class="bx-toolbar-item bx-ti-menu w-full">
                                <?php echo $this->getMenu('sys_site'); ?>
                            </div>
                        </div>
                        <!-- Search -->
                        <div class="bx-toolbar-item bx-ti-search flex-1 lg:flex-none flex items-center justify-end">
                            <div class="bx-ti-search-box flex-auto flex items-start md:min-w-88 mr-2 bg-white/95 dark:bg-gray-800/95 rounded-md shadow-md hidden">
                                <div class="relative w-full"><?php echo $this->parseSystemKey('sys_site_search', $mixedKeyWrapperHtml);?></div>
                            </div>
                            <div class="bx-ti-search-button group relative inline-flex items-center mx-2 text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 text-base font-medium leading-6 border border-transparent hover:border-gray-200/50 active:border-gray-300 dark:hover:border-gray-700/50 dark:active:border-gray-700 bg-gray-100 dark:bg-gray-700/50 active:bg-gray-300 dark:active:bg-black/50 hover:bg-gray-200/50 dark:hover:bg-gray-700/50 rounded-full">
                                <a href="javascript:void(0)" onclick="javascript:bx_site_search_show(this)">
                                    <span class="relative flex items-center justify-center h-8 w-8 md:h-10 md:w-10">
                                        <div class="bx-icon">
                                            <i class="sys-icon search "></i>
                                        </div>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Members Toolbar -->
                    <div id="bx-menu-toolbar-2-container" class="bx-toolbar-item bx-ti-right flex-none">
                        <?php echo $this->getMenu('sys_toolbar_member'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <bx_injection:injection_between_cover_logo />
    <?php echo $this->parseSystemKey('cover', $mixedKeyWrapperHtml);?>
    <bx_injection:injection_between_cover_top_menu />
    <div id="bx-menu-main-bar-wrapper" class="bx-menu-main-bar-wrapper bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800 <?php echo $this->parseSystemKey('site_submenu_hidden', $mixedKeyWrapperHtml);?>">
        <div id="bx-menu-main-bar" class="bx-menu-main-bar <?php echo $this->parseSystemKey('site_submenu_class', $mixedKeyWrapperHtml);?> bx-def-page-width mx-auto px-4 sm:px-6 lg:px-8 box-border">
            <div class="bx-menu-main-bar-cnt relative -mb-px">
                <div class="absolute w-full text-center">
                    <bx_injection:injection_top_menu_before />
                    <?php echo $this->getMenu('sys_site_submenu'); ?>
                    <bx_injection:injection_top_menu_after />
                </div>
            </div>
        </div>
    </div>
    <bx_injection:injection_between_content_menu />
    <div id="bx-content-wrapper">
        <?php echo $this->parseSystemKey('informer', $mixedKeyWrapperHtml);?>
        <div class="bx-page-wrapper bx-def-page-width mx-auto px-3 md:px-4 lg:px-6 box-border">
            <div id="bx-content-container" class="bx-content-container">
                <bx_injection:injection_content_before />
                <div id="bx-content-main" class="bx-content-main my-4 lg:my-6">