<?php
  add_action('admin_menu', 'dito_create_menu');

  function dito_create_menu(){
    add_menu_page('Dito', 'Dito', 'administrator', __FILE__, 'dito_settings_page', dito_plugin_url('/assets/images/dito-sidebar-logo.png'));
    wp_enqueue_style('dito-settings-css', dito_plugin_url('/assets/stylesheets/settings.css'));
  }

  function dito_settings_page(){
    dito_include_template('settings');
  }
?>