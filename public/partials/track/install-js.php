<?php if(get_option('dito_api_key')){ ?>
  <script>
    (function(d, e, id) {
      var s=d.createElement('script'),
      x=d.getElementsByTagName(e)[0];
      s.type='text/javascript';s.async=true;s.id=id;
      s.src='//storage.googleapis.com/dito/sdk.js';
      x.parentNode.insertBefore(s,x);
    })(document, 'script', 'dito-jssdk');

    window.ditoAsyncInit = function() {
      dito.init({
        apiKey: '<?php echo get_option("dito_api_key"); ?>',
        session: true
      });

      <?php
        include ( 'track-home-js.php' );
        include ( 'track-post-js.php' );
        include ( 'track-page-js.php' );
        include ( 'track-category-js.php' );
      ?>
    }
  </script>
<?php } ?>