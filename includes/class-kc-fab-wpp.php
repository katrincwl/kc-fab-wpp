<?php

class Kc_Fab_Wpp {

    protected $plugin_name;
    protected  $version;

    public function __construct() {

        $this->plugin_name = 'kc-fab-wpp';
        $this->version = '1.0.0';

        $this->load_dependencies();
        $this->define_admin_hooks();
        $this->define_public_hooks();

    }
    private function load_dependencies() {
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/kc-fab-wpp-admin.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/kc-fab-wpp-public.php';
    }

    private function define_admin_hooks(){
        $plugin_admin = new Kc_Fap_Wpp_admin($this->get_plugin_name(), $this->get_version());
        add_action( 'wp_enqueue_scripts', array($plugin_admin, 'enqueue_styles'));
        add_action( 'wp_enqueue_scripts', array($plugin_admin, 'enqueue_scripts'));
    }

    private function define_public_hooks(){
        $plugin_public = new Kc_Fab_Wpp_Public( $this->get_plugin_name(), $this->get_version() );
        add_action( 'wp_enqueue_scripts', array($plugin_public, 'enqueue_styles'));
        add_action( 'wp_enqueue_scripts', array($plugin_public, 'enqueue_scripts'));

        add_action('wp_footer', array($plugin_public, 'insert_fab_dom'));
    }
    public function get_plugin_name() {
        return $this->plugin_name;
    }
    public function get_version() {
        return $this->version;
    }
}