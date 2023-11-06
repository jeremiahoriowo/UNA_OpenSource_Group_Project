<div class="bx-msg-box-container my-4 px-4 text-center" id="<?php echo $a['id'];?>">
    <div class="bx-msg-box inline-block mx-auto p-4 bg-gray-200 dark:bg-gray-600 text-gray-600 dark:text-gray-300 uppercase rounded-md"><?php echo $a['msgText'];?></div>
    <?php if($a['bx_if:timer']['condition']){ ?>
        <script language="javascript">
            setTimeout("$('#<?php echo $a['bx_if:timer']['content']['id'];?>').bx_anim('hide', 'fade', 'slow', function(){$(this).remove();})", <?php echo $a['bx_if:timer']['content']['time'];?>);
        </script>
    <?php } ?>
</div>