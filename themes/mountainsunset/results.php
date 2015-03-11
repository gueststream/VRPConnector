<div class="container" id="vrpresults">

    <?php //include "sidebar.php"; ?>

    <?php if ($data->count == 0) { ?>
        <h2>No Results Found</h2>
        <p>Please revise your search criteria.</p>
    <?php } else { ?>
        <div class="row">
            <!-- Total number of results found -->
            <div class="col-md-2">
                <?php echo esc_html($data->count); ?> Results Found
            </div>

            <!-- Show # Results / Page selector -->
            <div class="col-md-2">
                Show
                <?php vrp_resultsperpage(); ?>
            </div>

            <!-- Sort by selector -->
            <div class="col-md-2">
                Sort By:
                <?php vrpsortlinks($data->results[0]); ?>
            </div>

            <!-- Pagination Links -->
            <div class="col-md-6">
                <?php vrp_pagination($data->totalpages, $data->page); ?>
            </div>
        </div>

        <div class="row">
            <a href="<?php echo esc_url(site_url() . '/vrp/favorites/show');?>">View Favorites</a>
        </div>

        <?php foreach($data->results as $a_unit) { ?>
            <div class="row">
                <div class="row">
                    <div class="col-md-10">
                        <a href="<?php bloginfo('url'); ?>/vrp/unit/<?php echo esc_attr($a_unit->page_slug); ?>/">
                            <h2><?php echo esc_html($a_unit->Name); ?></h2>
                        </a>
                    </div>
                    <div class="col-md-2">
                        <?php echo esc_html($a_unit->Bedrooms); ?> Beds /
                        <?php echo esc_html($a_unit->Bathrooms); ?> Baths
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?php bloginfo('url'); ?>/vrp/unit/<?php echo esc_attr($a_unit->page_slug);?>/">
                            <img src="<?php echo esc_url($a_unit->Thumb); ?>" class="vrpresultimg">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <?php echo wp_kses_post($a_unit->ShortDescription); ?>
                        <button class="vrp-favorite-button" data-unit="<?php echo esc_attr($a_unit->id); ?>"></button>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div>

