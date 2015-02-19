<?php
/**
 * [vrpComplexes] ShortCode view
 */

foreach($data as $complex) { ?>
    <div class="row">
        <div class="row">
            <h2>
                <a href="/vrp/complex/<?php echo $complex->page_slug; ?>">
                    <?php echo $complex->name; ?>
                </a>
            </h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $complex->Photo; ?>" style="width:100%">
            </div>
            <div class="col-md-8">
                <?php echo $complex->shortdescription; ?>
            </div>
        </div>
    </div>
<?php
}

