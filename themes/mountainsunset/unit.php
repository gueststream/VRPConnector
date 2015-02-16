<div class="container" id="vrpcontainer">

    <div class="row">
        <div class="col-md-2">
            <img src="<?php echo esc_url($data->photos[0]->thumb_url); ?>" style="width:100%">
        </div>
        <div class="col-md-8">
            <div class="row">
                <?php echo esc_html($data->Name); ?>
            </div>
            <div class="row">
                <?php echo esc_html($data->Bedrooms); ?> Bedroom(s) | <?php echo esc_html($data->Bathrooms); ?> Bathroom(s) | Sleeps <?php echo esc_html($data->Sleeps); ?>
            </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>

    <div class="row">
        <div id="tabs">
            <ul>
                <li><a href="#data">Data</a></li>
                <li><a href="#overview">Overview</a></li>
                <?php if (isset($data->reviews[0])) { ?>
                    <li><a href="#reviews">Reviews</a></li>
                <?php } ?>
                <li><a href="#calendar">Check Availability</a></li>
                <li><a href="#gmap">Map</a></li>
            </ul>

            <div id="data">
                <pre>
                    <?php print_r($data); ?>
                </pre>
            </div>

            <!-- OVERVIEW TAB -->
            <div id="overview">
                <div class="col-md-6">
                    <!-- Photo Gallery -->
                    <div id="photo">
                        <?php
                        $count = 0;
                        foreach ($data->photos as $k => $v) {
                            if($count > 0) { $style = "display:none;"; }
                            ?>
                            <img id="full<?php echo esc_attr($v->id); ?>" alt="<?php echo esc_attr($v->caption); ?>" src="<?php echo esc_url($v->url); ?>" style="width:100%; <?php echo esc_attr($style); ?>"/>
                            <?php
                            $count++;
                        }
                        ?>
                    </div>

                    <div id="gallery">
                        <?php
                        foreach ($data->photos as $k => $v) {
                            ?>
                            <img class="thumb" id="<?php echo esc_attr($v->id); ?>" alt="<?php echo esc_attr($v->caption); ?>" src="<?php echo esc_url($v->thumb_url); ?>" style="width:90px; float:left; margin: 3px;"/>
                        <?php
                        }
                        ?>
                    </div>

                </div>

                <div class="col-md-6">
                    <div id="description">
                        <p><?php echo wp_kses_post(nl2br($data->Description)); ?></p>
                    </div>

                    <div id="amenities">
                        <table class="amenTable" cellspacing="0">
                            <tr>
                                <td colspan="2" class="heading"><h4>Amenities</h4></td>
                            </tr>
                            <?php foreach ($data->attributes as $amen) { ?>
                                <tr>
                                    <td class="first"><b><?php echo esc_html($amen->name); ?></b>:</td>
                                    <td> <?php echo esc_html($amen->value); ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>

            <!-- REVIEWS TAB -->
            <div id="reviews">
                <?php if (isset($data->reviews[0])) { ?>
                    <table class="amenTable" cellspacing="0">
                        <tr>
                            <td colspan="2" class="heading"><h4>Reviews</h4></td>
                        </tr>
                        <?php foreach ($data->reviews as $review): ?>

                            <tr>
                                <td class="first" valign="top" align="center"><b><?php echo esc_html($review->name); ?></b></td>
                                <td><h2 style="background:none;border:none;"><?php echo esc_html($review->title); ?></h2>
                                    <small><?php echo esc_html($review->rating); ?> out of 5</small>
                                    <br><br>
                                    <?php echo esc_html($review->review); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?></table>
                <?php } ?>
            </div>

            <!-- CALENDAR TAB -->
            <div id="calendar">
                <div class="row">
                    <div class="col-md-6">
                        <div id="checkavailbox">
                            <h1 class="bookheading">Book Your Stay!</h1><br>

                            <div id="datespicked">
                                Select your arrival and departure dates below to reserve this unit.<br><br>

                                <form action="<?php echo esc_url(site_url('/vrp/book/step1/','https')); ?>"
                                      method="get"
                                      id="bookingform">

                                    <table align="center" width="96%">
                                        <tr>
                                            <td width="40%">Arrival:</td>
                                            <td>
                                                <input type="text" id="arrival2"
                                                       name="obj[Arrival]"
                                                       class="input unitsearch"
                                                       value="<?php echo esc_attr($_SESSION['arrival']); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Departure:</td>
                                            <td>
                                                <input type="text" id="depart2"
                                                       name="obj[Departure]"
                                                       class="input unitsearch"
                                                       value="<?php echo esc_attr($_SESSION['depart']); ?>">
                                            </td>
                                        </tr>
                                        <tr id="errormsg">
                                            <td colspan="2">
                                                <div></div> &nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div id="ratebreakdown"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="hidden"
                                                       name="obj[PropID]"
                                                       value="<?php echo esc_attr($data->id); ?>">
                                                <input type="button"
                                                       value="Check Availability"
                                                       class="bookingbutton rounded"
                                                       id="checkbutton">
                                            </td>
                                            <td align="right">
                                                <input type="submit"
                                                       value="Book Now!"
                                                       id="booklink"
                                                       class=""
                                                       style="display:none;"/>
                                            </td>
                                        </tr>
                                    </table>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div id="availability" style="">
                            <?php echo wp_kses_post(vrpCalendar($data->avail)); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h4>Seasonal Rates</h4>
                    <div id="rates">
                        <?php
                        $r = array();
                        foreach ($data->rates as $v) {
                            $start = date("m/d/Y", strtotime($v->start_date));
                            $end = date("m/d/Y", strtotime($v->end_date));

                            if ($v->chargebasis == 'Monthly') {
                                $r[$start . " - " . $end]->monthly = "$" . $v->amount;
                            }
                            if ($v->chargebasis == 'Daily') {
                                $r[$start . " - " . $end]->daily = "$" . $v->amount;
                            }
                            if ($v->chargebasis == 'Weekly') {
                                $r[$start . " - " . $end]->weekly = "$" . $v->amount;
                            }
                        }
                        ?>

                        <table cellpadding="3">
                            <tr>
                                <th>Date Range</th>
                                <th>Rate</th>
                            </tr>
                            <?php foreach ($r as $k => $v) { ?>
                                <tr>
                                    <td>
                                        <?php echo esc_html($k); ?>
                                    </td>
                                    <td><?php echo esc_html($v->daily); ?>/nt</td>

                                </tr>
                            <?php } ?>
                        </table>
                        * Seasonal rates are only estimates and do not reflect taxes or additional fees.
                    </div>
                </div>
            </div>

            <div id="gmap">
                <div id="map" style="width:100%;height:500px;"></div>
            </div>

        </div>
    </div>
</div>


<!-- GOOGLE MAPS SCRIPT -->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
    var geocoder;
    var map;
    var query = "<?php echo esc_js($data->Address) . " " . esc_js($data->Address2) . " " . esc_js($data->City) . " " . esc_js($data->State) . " " . esc_js($data->PostalCode); ?>";
    var image = '<?php bloginfo('template_directory'); ?>/images/mapicon.png';

    function initialize() {
        geocoder = new google.maps.Geocoder();
        var myOptions = {
            zoom: 13,
            <?php if(strlen($data->lat) > 0 && strlen($data->long) > 0){ ?>
            center: new google.maps.LatLng(<?php echo esc_js($data->lat); ?>, <?php echo esc_js($data->long); ?>),
            <?php } ?>
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map"), myOptions);
        <?php if(strlen($data->lat) == 0 || strlen($data->long) == 0){ ?>
        codeAddress();
        <?php } ?>
    }

    function codeAddress() {
        var address = query;
        geocoder.geocode({'address': address}, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);

                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    title: "<?php echo esc_js($data->title); ?>",
                    //icon: image
                });
            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });
    }
    jQuery(document).ready(function () {
        initialize();
    });

</script>

