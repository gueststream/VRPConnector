<div class="vrpcontainer_12 vrp100">
    <div class="vrpgrid_12 alpha omega ">
        <div class="vrpgrid_12">
            <a name="unitlistings"></a>

            <div id="unitsincomplex">
                Loading Units...
            </div>

            <form id="jaxform2">
                <?php foreach ($data as $k => $v) { ?>
                    <input type="hidden" name="search[<?php echo esc_attr($k); ?>]" value="<?php echo esc_attr($v); ?>">
                <?php } ?>
                <input type="hidden" name="search[NoComplex]" value="1">
                <input type="hidden" name="search[showall]" value="1">
                <?php 
				$page=filter_input(INPUT_GET,'page',FILTER_SANITIZE_NUMBER_INT);
				if ($page) { ?>
                    <input type="hidden" name="page" value="<?php echo esc_attr($page); ?>">
                <?php } ?>
            </form>
        </div>
    </div>
    <br style="clear:both;">
</div>
