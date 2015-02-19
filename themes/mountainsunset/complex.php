<?php
/**
 * Created by PhpStorm.
 * User: Josh Houghtelin <josh@findsomehelp.com>
 * Date: 10/26/14
 * Time: 6:41 PM
 */

//echo "<pre>"; print_r($data); echo "</pre>";
?>

<div class="container">
    <div class="row">
        <div id="tabs">

            <ul>
                <li><a href="#description">Description</a></li>
                <li><a href="#photos">Photos</a></li>
                <li><a href="#amenities">Amenities</a></li>
                <li><a href="#units">Units</a></li>
            </ul>

            <div id="description">
                <?php echo $data->description; ?>
            </div>

            <div id="photos">
                <?php foreach($data->photos as $photo) { ?>
                    <img src="<?php echo $photo->url; ?>">
                <?php } ?>
            </div>

            <div id="amenities">
                <?php echo $data->amenities; ?>
            </div>

            <div id="units">
                <?php foreach($data->units as $unit) { ?>
                <li>
                    <a href="/vrp/unit/<?php echo$unit->page_slug?>">
                        <h2><?php echo $unit->Name; ?></h2>
                    </a>
                    <?php echo $unit->ShortDescription; ?>
                </li>
                <?php } ?>
            </div>

        </div>
    </div>
</div>


<script type="text/javascript">
    jQuery('#tabs').tabs();
</script>