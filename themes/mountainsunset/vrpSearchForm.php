<div class="vrpgrid_3 alpha vrpsidebar">
    <div class="vrpgrid_100  resultsfound2">
        <h2>Search Availability</h2>
    </div>
    <?php

    if (isset($_GET['search']['arrival'])) {
        $_SESSION['arrival'] = $_GET['search']['arrival'];
    }

    if (isset($_GET['search']['departure'])) {
        $_SESSION['depart'] = $_GET['search']['departure'];
    }

    $arrival = "";
    if (isset($_SESSION['arrival'])) {
        $arrival = date('m/d/Y', strtotime($_SESSION['arrival']));
    } else {
        $arrival = date('m/d/Y', strtotime("+2 Days"));
    }

    $depart = "";
    if (isset($_SESSION['depart'])) {
        $depart = date('m/d/Y', strtotime($_SESSION['depart']));
    } else {
        $depart = date('m/d/Y', strtotime("+9 Days"));
    }

    $type = "";
    if (isset($_GET['search']['type'])) {
        $_SESSION['type'] = $_GET['search']['type'];
    }

    if (isset($_SESSION['type'])) {
        $complex = $_SESSION['type'];
    }

    $sleeps = "";
    if (isset($_GET['search']['sleeps'])) {
        $_SESSION['sleeps'] = $_GET['search']['sleeps'];
    }

    if (isset($_SESSION['sleeps'])) {
        $sleeps = $_SESSION['sleeps'];
    }

    $location = "";
    if (isset($_GET['search']['location'])) {
        $_SESSION['location'] = $_GET['search']['location'];
    }

    if (isset($_SESSION['location'])) {
        $location = $_SESSION['location'];
    }

    $bedrooms = "";
    if (isset($_GET['search']['bedrooms'])) {
        $_SESSION['bedrooms'] = $_GET['search']['bedrooms'];
    }

    if (isset($_SESSION['bedrooms'])) {
        $bedrooms = $_SESSION['bedrooms'];
    }

    global $vrp;
    $searchoptions = $vrp->searchoptions();
    ?>

    <form action="<?php bloginfo('url'); ?>/vrp/search/results/" method="get">
        <table>
            <tr>
                <th>
                    Check In:
                </th>
                <td>
                    <input type="text" class="input" name="search[arrival]" id="arrival"
                           value="<?php echo esc_attr($arrival); ?>">
                </td>
            </tr>
            <tr>
                <th>Check Out:</th>
                <td><input type="text" class="input" name="search[departure]" id="depart"
                           value="<?php echo esc_attr($depart); ?>"></td>
            </tr>
            <tr>
                <th>Type</th>
                <td>
                    <select name="search[type]" style="width:143px;">
                        <option value="">Any</option>
                        <?php
                        foreach ($searchoptions->types as $v) {

                            if ($type == $v) {
                                $sel = "selected=\"selected\"";
                            } else {
                                $sel = "";
                            }
                            ?>
                            <option
                                value="<?php echo esc_attr($v); ?>" <?php echo esc_html($sel); ?>><?php echo esc_attr($v); ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Sleeps</th>
                <td>
                    <select name="search[sleeps]">
                        <option value="">Any</option>
                        <?php
                        foreach (range($searchoptions->minsleeps, $searchoptions->maxsleeps) as $v) {
                            $sel = "";
                            if ($sleeps == $v) {
                                $sel = "selected=\"selected\"";
                            }
                            ?>
                            <option
                                value="<?php echo esc_attr($v); ?>" <?php echo esc_html($sel); ?>><?php echo esc_attr($v); ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Location</th>
                <td>
                    <select name="search[location]">
                        <option value="">No Preference</option>
                        <?php foreach ($searchoptions->areas as $v) {
                            $sel = "";
                            if ($location == $v) {
                                $sel = "selected=\"selected\"";
                            }
                            ?>
                            <option
                                value="<?php echo esc_attr($v); ?>" <?php echo esc_html($sel); ?>><?php echo esc_attr($v); ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Beds</th>
                <td>
                    <select name="search[bedrooms]">
                        <option value="">Any</option>
                        <?php foreach (range($searchoptions->minbeds, $searchoptions->maxbeds) as $v) {
                            $sel = "";
                            if ($bedrooms == $v) {
                                $sel = "selected=\"selected\"";
                            }
                            ?>
                            <option
                                value="<?php echo esc_attr($v); ?>" <?php echo esc_html($sel); ?>><?php echo esc_attr($v); ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="propSearch" class="ButtonView rounded" value="Search">
                </td>
            </tr>
        </table>
    </form>

</div>
