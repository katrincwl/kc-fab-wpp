<?php

class Kc_Fab_Wpp_Public{

    private $plugin_name;
    private $version;

    public function __construct( $plugin_name, $version ) {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    public function enqueue_styles() {
        wp_register_style('font-awesome-css', plugin_dir_url( __FILE__ ) . '../assets/css/font-awesome.min.css', array(), $this->version, 'all' );
        wp_enqueue_style('font-awesome-css');
        wp_register_style('kc-fab-css', plugin_dir_url( __FILE__ ) . '../assets/vendor/kc_fab/dist/css/kc.fab.css', array(), $this->version, 'all' );
        wp_enqueue_style('kc-fab-css');
    }

    public function enqueue_scripts() {
        wp_register_script('kc-fab-base', plugin_dir_url( __FILE__ ) . '../assets/vendor/kc_fab/dist/js/kc.fab.min.js', array( 'jquery' ), $this->version, true);
        wp_enqueue_script('kc-fab-base');
        wp_register_script('init-kc-fab', plugin_dir_url( __FILE__ ) . '../assets/js/init-kc-fab.js', array( 'jquery' ), $this->version, true);
        wp_enqueue_script('init-kc-fab');
    }

    public function insert_fab_dom(){
        echo '<div class="kc_fab_wrapper"></div>';
    }

}