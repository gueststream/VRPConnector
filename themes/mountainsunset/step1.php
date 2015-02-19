<div class="vrpgrid_12 userbox">
    <h3>Reservation Rental Agreement</h3>

    <div class="padit" style="height:250px;overflow-y:auto;" id="rabox">
        <?php echo  nl2br ($data->booksettings->Contract); ?>
    </div>

</div>
<div class="clear"></div>  <p style="text-align:right;"><a
        href="/vrp/book/step1/?obj[Arrival]=<?php echo  $data->Arrival; ?>&obj[Departure]=<?php echo  $data->Departure; ?>&obj[PropID]=<?php echo  $_GET[ 'obj' ][ 'PropID' ]; ?>&obj[Adults]=<?php echo  $_GET[ 'obj' ][ 'Adults' ]; ?>&obj[Children]=<?php echo  $_GET[ 'obj' ][ 'Children' ]; ?>&printme=1"
        id="printpage">Print Agreement</a></p><br><br>
<?php
$step = "step3";
if (isset($data->booksettings->HasPackages)) {
    $step = "step1a";
}
?>
<div style="text-align: center">
    <a href="/vrp/book/<?php echo  $step; ?>/?obj[Arrival]=<?php echo  $data->Arrival; ?>&obj[Departure]=<?php echo  $data->Departure; ?>&obj[PropID]=<?php echo  $_GET[ 'obj' ][ 'PropID' ]; ?>&obj[Adults]=<?php echo  $_GET[ 'obj' ][ 'Adults' ]; ?>&obj[Children]=<?php echo  $_GET[ 'obj' ][ 'Children' ]; ?>"
       class="btn btn-success success">I Agree, Continue with Reservation</a>
</div>
<div class="clear"></div><br>

<style>
    #printagreement {
        display: none;
    }

</style>
<script>
    jQuery(document).ready(function () {
        jQuery("#printpage").click(function (e) {
            e.preventDefault();

            window.open(jQuery(this).attr('href'), 'printagreement', 'height=200,width=200');

        });
    });
</script>
