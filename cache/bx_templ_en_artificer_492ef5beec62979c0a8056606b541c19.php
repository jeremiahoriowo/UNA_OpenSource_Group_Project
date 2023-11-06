<div class="adm-bp-<?php echo $a['action'];?>-block-form bx-def-margin-top-neg">
    <div class="adm-bp-<?php echo $a['action'];?>-block-form-cnt">
        <?php echo $a['form'];?>
        <script language="javascript">
            $(document).ready(function () {
                $("#<?php echo $a['form_id'];?>").ajaxForm({ 
                    dataType: "json",
                    beforeSubmit: function(formData, jqForm, options) {
                        bx_loading($("#<?php echo $a['form_id'];?>"), true);
                    },
                    success: function(oData) {
                        $(".bx-popup-applied:visible").dolPopupHide();
                        oBxDolStudioPage.processJson(oData);
                    }
                });
            });
        </script>
    </div>
</div>