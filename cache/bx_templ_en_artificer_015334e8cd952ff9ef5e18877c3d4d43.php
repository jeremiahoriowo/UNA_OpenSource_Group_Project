<div class="h-48 m-1 mb-0 bg-gray-200 dark:bg-gray-700 rounded animate-pulse">&nbsp;</div>
<script>
    var iBlockID = '<?php echo $a['id'];?>';
    $(document).ready(function () {
        getHtmlData($('#bx-page-block-' + iBlockID), bx_append_url_params(document.location.href, 'dynamic=tab&pageBlock=' + iBlockID), onAsyncBlockLoad, 'post', false, {includedCss: JSON.stringify(aIncludedCss), includedJs: JSON.stringify(aIncludedJs)}, false);
    });
</script>