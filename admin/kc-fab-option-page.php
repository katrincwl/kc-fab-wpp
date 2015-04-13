
<div class="wrap">
    <h2>KC FAB Social Plugin Setting</h2>
    <form method="post" action="options.php">
        <h3>Please select the button action</h3>
        <?php
        settings_fields('kc_fab_link_group');
        do_settings_sections( 'kc_fab_link_group' );

        $social_btn_action = get_option('kc_fab_social_action');
        $fb_url = get_option('kc_fab_fb_link');
        $google_url = get_option('kc_fab_gp_link');
        $twitter_url = get_option('kc_fab_twitter_link');
        ?>
        <input id="share_option" class="kc_fab_social_action" type="radio" name="kc_fab_social_action" value="share_to_social_network" <?php checked('share_to_social_network' == $social_btn_action);?>><label for="share_option"> Share post/page to social network</label>
        <br>
        <input id="go_social_page_option" class="kc_fab_social_action" type="radio" name="kc_fab_social_action" value="my_social_page" <?php checked('my_social_page' == $social_btn_action);?>><label for="go_social_page_option"> Go to social network page</label>

        <div class="social_page_option_div" >
            <h3>Please type in the social network page url</h3>
            <table>
                <tr>
                    <td>Facebook URL</td>
                    <td><input name="kc_fab_fb_link" type="text" id="kc_fab_fb_link" value="<?php echo (isset($fb_url) && $fb_url != '') ? $fb_url : ''; ?>"/></td>
                </tr>
                <tr>
                    <td>Google+ URL</td>
                    <td><input name="kc_fab_gp_link" type="text" id="kc_fab_gp_link" value="<?php echo (isset($google_url) && $google_url != '') ? $google_url : ''; ?>"/></td>
                </tr>
                <tr>
                    <td>Twitter URL</td>
                    <td><input name="kc_fab_twitter_link" type="text" id="kc_fab_twitter_link" value="<?php echo (isset($twitter_url) && $twitter_url != '') ? $twitter_url : ''; ?>"/></td>
                </tr>
            </table>
            <h4 style="font-style: italic">Remarks: please prepend the "http://" in the input box</h4>
        </div>
        <?php submit_button(); ?>
    </form>
    <script>
        jQuery(document).ready(function() {
            function trigger_show_options(){
                if (jQuery('#share_option').prop('checked')){
                    jQuery('.social_page_option_div').hide();
                }else{
                    jQuery('.social_page_option_div').show();
                }
            }
            trigger_show_options();
            jQuery('.kc_fab_social_action').change(function(){
                trigger_show_options();
            });
        });
    </script>
</div>