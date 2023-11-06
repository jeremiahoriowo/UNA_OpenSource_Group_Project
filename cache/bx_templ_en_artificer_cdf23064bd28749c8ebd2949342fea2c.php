<div <?php echo $a['tr_attrs'];?>>
    <div class="bx-form-element">
        <?php if($a['bx_if:show_one_line']['condition']){ ?>
            <div class="bx-form-value bx-clearfix<?php echo $a['bx_if:show_one_line']['content']['class_value'];?>"><?php echo $a['bx_if:show_one_line']['content']['value'];?></div>
            <?php if($a['bx_if:show_one_line']['content']['bx_if:show_caption']['condition']){ ?>
                <div class="bx-form-caption<?php echo $a['bx_if:show_one_line']['content']['bx_if:show_caption']['content']['class_caption'];?>"><?php echo $a['bx_if:show_one_line']['content']['bx_if:show_caption']['content']['caption'];?><?php echo $a['bx_if:show_one_line']['content']['bx_if:show_caption']['content']['required'];?></div>
            <?php } ?>
        <?php } ?>
        <?php if($a['bx_if:show_lined']['condition']){ ?>
            <?php if($a['bx_if:show_lined']['content']['bx_if:show_caption']['condition']){ ?>
                <div class="bx-form-caption<?php echo $a['bx_if:show_lined']['content']['bx_if:show_caption']['content']['class_caption'];?>"><?php echo $a['bx_if:show_lined']['content']['bx_if:show_caption']['content']['caption'];?><?php echo $a['bx_if:show_lined']['content']['bx_if:show_caption']['content']['required'];?></div>
            <?php } ?>
            <div class="bx-form-value bx-clearfix<?php echo $a['bx_if:show_lined']['content']['class_value'];?>"><?php echo $a['bx_if:show_lined']['content']['value'];?></div>
        <?php } ?>
    </div><?php echo $a['info'];?><?php echo $a['error'];?>
</div>