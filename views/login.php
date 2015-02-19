<div class="wrap">
    <div style="text-align:center;">
        Click the button below to login:<br/>

        <form action="http://www.gueststream.net/main/login/" method="post" id="VRPLOGIN" target="_blank">
            <input type="hidden" name="vrpUser" value="<?php echo esc_attr(get_option('vrpUser')); ?>">
            <input type="hidden" name="vrpPass" value="<?php echo esc_attr(get_option('vrpPass')); ?>">
            <input class="button-primary" type="submit" value="LOGIN TO VRP"
                   style="font-size:26px;font-family:'Century Gothic';font-weight:bold;">
        </form>
    </div>
</div>