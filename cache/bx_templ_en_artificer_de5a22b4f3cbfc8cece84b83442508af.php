<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <head>
        <bx_injection:injection_head_begin />
        
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->parseSystemKey('page_charset', $mixedKeyWrapperHtml);?>" />
        <title><?php echo $this->parseSystemKey('page_header', $mixedKeyWrapperHtml);?></title>

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

        <script defer language="javascript">
            var sUrlStudio = 'http://localhost/UNA-Update/studio/';
        </script>
        
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
    var bUseSvgLoading = true;
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
            color: '#3a8686', // #rgb or #rrggbb or array of colors
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
        bx_activate_anim_icons('#3e8685');
    });
</script>

        <?php echo $this->parseSystemKey('extra_js', $mixedKeyWrapperHtml);?>

        <?php echo $this->parseSystemKey('system_injection_head', $mixedKeyWrapperHtml);?>
        <bx_injection:injection_head />
    </head>
    <body class="bx-def-font bx-def-color-bg-page bx-std-bg<bx_injection:injection_body_style />" <bx_injection:injection_body /> >
        <?php echo $this->parseSystemKey('system_injection_header', $mixedKeyWrapperHtml);?>
        <bx_injection:injection_header />


<div class="bx-main">
    <div class="bx-std-page-bg<bx_injection:injection_bg_style />">
        <bx_injection:injection_bg_content />
    </div>
    <div class="bx-std-page bx-def-page-margin">
        <?php echo $this->parseSystemKey('menu_top', $mixedKeyWrapperHtml);?>
        <div class="bx-std-content bx-std-pc-stretch">