<div class="vrpgrid_3 alpha vrpsidebar">
    <div class="vrpgrid_100  resultsfound2">
        <h2>Revise Your Search</h2>
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

//print_r($searchoptions);

    ?>

    <form action="<?php bloginfo('url'); ?>/vrp/search/results/" method="get">


        Check In:<br/>
        <input type="text" class="input" name="search[arrival]" id="arrival" value="<?php echo $arrival; ?>">


        Check Out:<br/>
        <input type="text" class="input" name="search[departure]" id="depart" value="<?php echo $depart; ?>">


        Type:<br/>
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
                <option value="<?php echo $v; ?>" <?php echo $sel; ?>>
                    <?php echo $v; ?>
                </option>

            <?php } ?>
        </select>

        Sleeps:<br/>
        <select name="search[sleeps]">
            <option value="">Any</option>
            <?php
            foreach (range($searchoptions->minsleeps, $searchoptions->maxsleeps) as $v) {
                $sel = "";
                if ($sleeps == $v) {
                    $sel = "selected=\"selected\"";
                }
                ?>

                <option value="<?php echo $v; ?>" <?php echo $sel; ?>>
                    <?php echo $v; ?>
                </option>

            <?php } ?>

        </select>


        Location:<br/>
        <select name="search[location]">
            <option value="">No Preference</option>
            <?php foreach ($searchoptions->areas as $v) {
                $sel = "";
                if ($location == $v) {
                    $sel = "selected=\"selected\"";
                }
                ?>

                <option value="<?php echo $v; ?>" <?php echo $sel; ?>>
                    <?php echo $v; ?>
                </option>

            <?php } ?>

        </select>


        Beds:<br/>
        <select name="search[bedrooms]">
            <option value="">Any</option>
            <?php foreach (range($searchoptions->minbeds, $searchoptions->maxbeds) as $v) {
                $sel = "";
                if ($bedrooms == $v) {
                    $sel = "selected=\"selected\"";
                }
                ?>

                <option value="<?php echo $v; ?>" <?php echo $sel; ?>>
                    <?php echo $v; ?>
                </option>

            <?php } ?>

        </select>


        <input type="submit" name="propSearch" class="ButtonView rounded" value="Search">


    </form>

</div>