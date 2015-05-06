<?php
  if(!get_option('dito_topbar_enabled')) return;

  add_action('wp_enqueue_scripts', 'dito_topbar_scripts');
  add_action('wp_footer', 'add_topbar_html');

  function dito_topbar_scripts(){
    wp_enqueue_style('dito-topbar-css', dito_plugin_url('/assets/stylesheets/topbar.css'));
    wp_enqueue_script('dito-topbar-js', dito_plugin_url('/assets/javascripts/topbar.js'));
  }

  function add_topbar_html(){
    dito_include_template('topbar');
  }
?>