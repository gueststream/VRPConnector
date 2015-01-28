<div class="vrpcontainer_12 vrp100">
    <div class="vrpgrid_12 alpha omega ">
        <div class="vrpgrid_12">
            <a name="unitlistings"></a>

            <div id="unitsincomplex">
                Loading Units...
            </div>

            <form id="jaxform2">
                <?php foreach ($data as $k => $v) { ?>
                    <input type="hidden" name="search[<?= $k; ?>]" value="<?= $v; ?>">
                <?php } ?>
                <input type="hidden" name="search[NoComplex]" value="1">
                <input type="hidden" name="search[showall]" value="1">
                <?php if (isset($_GET['page'])) { ?>
                    <input type="hidden" name="page" value="<?= $_GET['page']; ?>">
                <?php } ?>
            </form>
        </div>
    </div>
    <br style="clear:both;">
</div>