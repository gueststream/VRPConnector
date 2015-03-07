<?php
/**
 * Created by PhpStorm.
 * User: Josh Houghtelin <josh@findsomehelp.com>
 * Date: 10/23/14
 * Time: 1:35 PM
 */
$search=filter_input(INPUT_GET,'search',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
if (isset($search['arrival'])){
    $_SESSION['arrival']=$search['arrival'];
}
if (isset($search['Adults'])){
    $_SESSION['adults']=$search['Adults'];

}
if (isset($search['Children'])){
    $_SESSION['children']=$search['Children'];

}
if (isset($search['departure'])){
    $_SESSION['depart']=$search['departure'];
}

$arrival="";
if (isset($_SESSION['arrival'])){
    $arrival=date('m/d/Y',strtotime($_SESSION['arrival']));
}else{
    $arrival=date('m/d/Y',strtotime("+2 Days"));
}
$depart="";
if (isset($_SESSION['depart'])){
    $depart=date('m/d/Y',strtotime($_SESSION['depart']));
}else{
    $depart=date('m/d/Y',strtotime("+9 Days"));
}
$type="";
if (isset($search['type'])){
    $_SESSION['type']=$search['type'];
}

if (isset($_SESSION['type'])){
    $complex=$_SESSION['type'];
}

$sleeps="";
if (isset($search['sleeps'])){
    $_SESSION['sleeps']=$search['sleeps'];
}

if (isset($_SESSION['sleeps'])){
    $sleeps=$_SESSION['sleeps'];
}

if (isset($_SESSION['adults'])){
    $adults=$_SESSION['adults'];
}
if (isset($_SESSION['children'])){
    $children=$_SESSION['children'];
}

$location="";
if (isset($search['location'])){
    $_SESSION['location']=$search['location'];
}

if (isset($_SESSION['location'])){
    $location=$_SESSION['location'];
}
$bedrooms="";
if (isset($search['bedrooms'])){
    $_SESSION['bedrooms']=$search['bedrooms'];
}

if (isset($_SESSION['bedrooms'])){
    $bedrooms=$_SESSION['bedrooms'];
}
global $vrp;
$searchoptions=$vrp->searchoptions();
?>
<h2>Advanced Search</h2>
<br><br>
<form action="/vrp/complexsearch/results/" method="get">
    <div class="large-3 columns">
        <div class="ui-widget-header ui-corner-all">
            <h4>Search Options</h4>
        </div>
        <table cellspacing="10">
            <tr><td>Arrival:</td><td><input type="text" name="search[arrival]" id="arrival2" style="width:90px;" value="Not Sure"></td></tr>
            <tr><td>Departure:</td><td> <input type="text" name="search[departure]" id="depart2" style="width:90px;" value="Not Sure"></td></tr>
            <tr><td>Adults: </td><td><select name="search[Adults]"><option selected="selected" value="">Any</option>
                        <?php
                        foreach (range(1,40) as $v){ ?>

                            <option value="<?php echo esc_attr($v);?>"><?php echo esc_attr($v);?></option>
                        <?php } ?></select></td></tr>
            <tr><td>Children: </td><td><select name="search[Children]"><option selected="selected" value="">Any</option>
                        <?php
                        foreach (range(1,40) as $v){ ?>

                            <option value="<?php echo esc_attr($v);?>"><?php echo esc_attr($v);?></option>
                        <?php } ?></select></td></tr>
            <tr><td>Bedrooms:</td><td> <select name="search[bedrooms]" style="width:90px;">
                        <option selected="selected" value="">Any</option>
                        <?php
                        foreach (range($searchoptions->minbeds,$searchoptions->maxbeds) as $v){ ?>

                            <option value="<?php echo esc_attr($v);?>"><?php echo esc_attr($v);?>+</option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Bedrooms:</td>
                <td>
                    <select name="search[bedrooms]" style="width:90px;">
                        <option selected="selected" value="">Any</option>
                        <?php
                        foreach (range($searchoptions->minbaths,$searchoptions->maxbaths) as $v){ ?>

                            <option value="<?php echo esc_attr($v);?>"><?php echo esc_attr($v);?>+</option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Bathrooms: </td>
                <td>
                    <select name="search[bathrooms]" style="width:90px;">
                        <option selected="selected" value="">Any</option>
                        <?php foreach (range($searchoptions->minbaths,$searchoptions->maxbaths) as $v){ ?>
                            <option value="<?php echo esc_attr($v);?>">
                                <?php echo esc_attr($v);?>+
                            </option>
                        <?php } ?>
                    </select>
                    <input type="hidden" name="search[showmax]" value="1">
                </td>
            </tr>
            <tr>
                <td>Type:</td>
                <td>
                    <select name="search[type]">
                        <option value="Villa">Oceanfront Villa</option>
                        <option value="Condo">Oceanfront Condo</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    <div class="large-9 columns">
        <div class="ui-widget-header ui-corner-all">
            <h4>Locations</h4>
        </div>
        <div style="padding:10px;">
            <ul class="advancedlist">
                <?php foreach ($searchoptions->locations as $v){ ?>
                    <li><input type="checkbox" name="search[location][]" value="<?php echo esc_attr($v);?>" /><label><?php echo esc_html($v);?></label></li>
                <?php } ?>

            </ul></div>
        <br style="clear:both;"><br>
        <div class="ui-widget-header ui-corner-all">
            <h4>Amenities</h4>
        </div>
        <div style="padding:10px;">
            <ul class="advancedlist">
                <?php foreach ($searchoptions->attrs as $v){ ?>
                    <li><input type="checkbox" name="search[attrs][]" value="<?php echo esc_attr($v);?>" /><label><?php echo esc_html($v);?></label></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <br style="clear:both;">
    <input type="hidden" name="show" value="20">
    <input type="submit" name="propSearch" class="ButtonView"  value="Search">
    <br>
</form>
<br><br><br>
