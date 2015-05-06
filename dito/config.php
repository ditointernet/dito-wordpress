<?php
  add_action('admin_init', 'dito_settings');

  function dito_settings() {
    //dito_reset_settings();
    dito_app_settings();
    dito_tracking_settings();
    dito_topbar_settings();
    dito_login_button_settings();
    dito_login_modal_settings();
  }

  function dito_get_settings_group_name(){
    return 'dito-settings';
  }

  function dito_app_settings(){
    dito_register_setting('dito_api_key');
  }

  function dito_tracking_settings(){
    dito_register_setting('dito_home_track_enabled', true);
    dito_register_setting('dito_post_track_enabled', true);
    dito_register_setting('dito_page_track_enabled', true);
  }

  function dito_topbar_settings(){
    dito_register_setting('dito_topbar_enabled', false);
    dito_register_setting('dito_topbar_text', 'Fique por dentro de tudo que acontece no nosso Blog');
    dito_register_setting('dito_topbar_background_color', '#f8f8f8');
    dito_register_setting('dito_topbar_text_color', '#5E5E5E');
    dito_register_setting('dito_topbar_link_color', '#3670A9');
    dito_register_setting('dito_topbar_greeting_text', 'Seja bem-vindo, <strong>{{name}}</strong>.');
  }

  function dito_login_button_settings(){
    dito_register_setting('dito_topbar_button_text', 'Faça seu login');
    dito_register_setting('dito_topbar_button_text_color', '#FFF');
    dito_register_setting('dito_topbar_button_color', '#7FC85B');
  }

  function dito_login_modal_settings(){
    dito_register_setting('dito_login_modal_title', 'Faça seu login');
    dito_register_setting('dito_login_modal_facebook_enabled', true);
    dito_register_setting('dito_login_modal_google_enabled');
    dito_register_setting('dito_login_modal_facebook_button_text', 'Entrar usando o Facebook');
    dito_register_setting('dito_login_modal_google_button_text', 'Entrar usando o Google');
    dito_register_setting('dito_login_modal_warning_text', '<strong>Não se preocupe.</strong> Não compartilharemos nada sem sua permissão.');
    dito_register_setting('dito_login_modal_facebook_scope', 'email, user_birthday, user_hometown, user_likes, user_location');
    dito_register_setting('dito_login_modal_google_scope', 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email');
  }

  function dito_reset_settings(){
    delete_option('dito_api_key');
    delete_option('dito_home_track_enabled');
    delete_option('dito_post_track_enabled');
    delete_option('dito_page_track_enabled');
    delete_option('dito_topbar_enabled');
    delete_option('dito_topbar_text');
    delete_option('dito_topbar_background_color');
    delete_option('dito_topbar_text_color');
    delete_option('dito_topbar_link_color');
    delete_option('dito_topbar_greeting_text');
    delete_option('dito_topbar_button_text');
    delete_option('dito_topbar_button_text_color');
    delete_option('dito_topbar_button_color');
    delete_option('dito_login_modal_title');
    delete_option('dito_login_modal_facebook_enabled');
    delete_option('dito_login_modal_google_enabled');
    delete_option('dito_login_modal_facebook_button_text');
    delete_option('dito_login_modal_google_button_text');
    delete_option('dito_login_modal_warning_text');
    delete_option('dito_login_modal_facebook_scope');
    delete_option('dito_login_modal_google_scope');
  }

  function dito_register_setting($optionName, $defaultValue = null){
    register_setting(dito_get_settings_group_name(), $optionName);

    if($defaultValue){
      add_option($optionName, $defaultValue);
    }
  }

  function dito_plugin_url($path){
    return plugins_url('/dito' . $path);
  }

  function dito_include_template($template_name){
    include(plugin_dir_path( __FILE__ ) . 'templates/'. $template_name .'_template.php');
  }
?>