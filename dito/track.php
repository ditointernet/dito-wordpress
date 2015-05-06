<?php
  add_action('wp_footer', 'insert_dito_script');

  function insert_dito_script(){
    include('track/install-js.php');
  }
?>