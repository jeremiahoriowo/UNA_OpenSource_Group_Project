<div class="bx-strg-resize-file bx-def-color-bg-block">
    <div class="bx-strg-resize-file-cnt">
        <?php echo $a['form'];?>
        <script language="javascript">
            $(document).ready(function () {
                $("#<?php echo $a['form_id'];?>").ajaxForm({ 
                    dataType: "json",
                    beforeSubmit: function (formData, jqForm, options) {
                        bx_loading($("#<?php echo $a['form_id'];?>"), true);
                    },
                    success: function (data) {
                        $(".bx-popup-applied:visible").dolPopupHide();
                        glGrids.<?php echo $a['object'];?>.processJson(data, '<?php echo $a['action'];?>');
                    }
                });
            });
        </script>
    </div>
</div>