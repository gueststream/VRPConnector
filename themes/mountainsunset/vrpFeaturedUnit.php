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
?>

<a href="/vrp/unit/<?php echo $data->page_slug; ?>"
   Title="<?php echo $data->Name; ?>"
    >
    <img src="<?php echo $data->Photo; ?>">
</a>