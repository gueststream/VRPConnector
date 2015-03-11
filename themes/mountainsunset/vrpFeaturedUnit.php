<?php
/**
 * @file vrpFeaturedUnit.php
 * @project VRPConnector
 * @author Josh Houghtelin <josh@findsomehelp.com>
 * @created 2/24/15 1:31 PM
 */

/**
 * $data['Location']
 * $data['City']
 * $data['page_slug']
 * $data['Area']
 * $data['Name']
 * $data['Bedrooms']
 * $data['Bathrooms']
 * $data['Photo']
 * $data['Thumb']
 */
if(is_array($data)) {
    foreach($data as $unit) {
        ?>
        <a href="/vrp/unit/<?php echo esc_attr($unit->page_slug); ?>"
           Title="<?php echo esc_attr($unit->Name); ?>"
            >
            <img src="<?php echo esc_url($unit->Photo); ?>">
        </a>
    <?php
    }
}
?>