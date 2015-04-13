<?php

class Kc_Fap_Wpp_Admin{

    private $plugin_name;
    private $version;



    public function __construct( $plugin_name, $version ) {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    public function fab_register_settings(){
        register_setting('kc_fab_link_group', 'kc_fab_social_action');
        register_setting('kc_fab_link_group', 'kc_fab_fb_link');
        register_setting('kc_fab_link_group', 'kc_fab_gp_link');
        register_setting('kc_fab_link_group', 'kc_fab_twitter_link');
    }


    public function enqueue_styles() {
    }

    public function enqueue_scripts() {
    }

    public function option_page(){
        include('kc-fab-option-page.php');
    }

    public function fab_plugin_menu() {
        add_options_page('KC FAB Options', 'KC FAB', 'manage_options', 'kc-fab-plugin', array($this,'option_page'));
    }




}