<?php global $vrp; ?>
<h2>Vacation Rental Platform Connector Settings</h2>
<p>Please enter your VRP API key. The API key can be found on the Settings page in the VRP management area.</p>
<form method="post" action="options.php">
    <?php wp_nonce_field('update-options'); ?>
    <table class="form-table">
        <tr valign="top">
            <th scope="row">API Key:</th>
            <td><input type="text" name="vrpAPI" value="<?php echo get_option('vrpAPI'); ?>" style="width:400px;"/>
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">VRP Username:</th>
            <td><input type="text" name="vrpUser" value="<?php echo get_option('vrpUser'); ?>"/></td>
        </tr>
        <tr valign="top">
            <th scope="row">VRP Password:</th>
            <td><input type="password" name="vrpPass" value="<?php echo get_option('vrpPass'); ?>"/></td>
        </tr>
        <tr>
            <th>Theme</th>
            <td>
                <select name="vrpTheme">
                    <?php foreach ($vrp->available_themes as $name => $displayname) {
                        $sel = "";
                        if ($name == $vrp->themename) {$sel = "SELECTED";} ?>
                        <option value="<?=$name?>" <?=$sel?>><?=$displayname?></option>
                        <?php } ?>
                </select>
            </td>
        </tr>
    </table>
    <input type="hidden" name="action" value="update"/>
    <input type="hidden" name="page_options" value="vrpAPI,vrpUser,vrpPass,vrpTheme"/>

    <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>"/>
    </p>
</form>
<hr>
<b>Current Status:</b>
<?php
$data = $vrp->testAPI();
switch ($data->Status) {
    case "Online":
        echo "<span style='color:green;'>Online</span>";
        break;
    default:
        echo "<span style='color:red;'>Error</span>";
        break;
}
?>
</div>
