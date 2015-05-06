<div id="dito-topbar">
  <div id="dito-topbar-content" style="background: <?php echo get_option('dito_topbar_background_color'); ?>">
    <div id="dito-topbar-content-wrapper">
      <div id="dito-topbar-logo">
        <a href="http://dito.com.br/" target="_blank" title="Dito"><img src="<?php echo dito_plugin_url('/assets/images/topbar-logo-dito.png'); ?>" /></a>
      </div><!-- #dito-topbar-logo -->

      <div id="dito-topbar-box" style="color: <?php echo get_option('dito_topbar_text_color'); ?>;">
        <div id="dito-topbar-signed-out">
          <span id="dito-topbar-text"><?php echo get_option('dito_topbar_text'); ?></span>
          <span id="dito-topbar-arrow-right">&#10095;</span>
          <button id="dito-topbar-login-button" type="button" style="background: <?php echo get_option('dito_topbar_button_color'); ?>; color: <?php echo get_option('dito_topbar_button_text_color'); ?>;"><?php echo get_option('dito_topbar_button_text'); ?></button>
        </div><!-- #dito-topbar-signed-out -->

        <div id="dito-topbar-signed-in">
          <span id="dito-topbar-user-picture"><img /></span>
          <span id="dito-topbar-user-greeting" data-greeting-text="<?php echo get_option('dito_topbar_greeting_text'); ?>"><?php echo get_option('dito_topbar_greeting_text'); ?></span>
          <span id="dito-topbar-user-logout"><a href="javascript:void(0);">Sair</a></span>
        </div><!-- #dito-topbar-signed-in -->
      </div><!-- #dito-topbar-box -->

      <div id="dito-topbar-close" title="Fechar" style="color: <?php echo get_option('dito_topbar_text_color'); ?>;">&times;</div>
    </div><!-- #dito-topbar-content-wrapper -->
  </div><!-- #dito-topbar-content -->

  <div id="dito-topbar-login" class="dito-hide">
    <div id="dito-topbar-login-overlay"></div><!-- #dito-topbar-login-overlay -->
    <div id="dito-topbar-login-content">
      <div id="dito-topbar-login-title"><?php echo get_option("dito_login_modal_title"); ?></div><!-- #dito-topbar-login-title -->
      <div id="dito-topbar-login-box">
        <div id="dito-topbar-login-facebook" class="dito-login-button"></div>
        <div id="dito-topbar-login-google" class="dito-login-button"></div>
      </div><!-- #dito-topbar-login-box -->

      <div id="dito-topbar-login-warning">
        <?php echo get_option("dito_login_modal_warning_text"); ?>
      </div><!-- #dito-topbar-login-warning -->

      <div id="dito-topbar-login-close">&times;</div>
      <div id="dito-topbar-login-dito-logo">
        <a href="http://dito.com.br/" target="_blank"><img src="<?php echo dito_plugin_url('/assets/images/login-dito-logo.png'); ?>" /></a>
      </div>
    </div><!-- #dito-topbar-login-content -->
  </div><!-- #dito-topbar-login -->
</div><!-- #dito-topbar -->

<style type="text/css">
  #dito-topbar a {
    color: <?php echo get_option("dito_topbar_link_color"); ?>;
  }
</style>

<script type="text/javascript">
  (function(){
    var ditoInterval = window.setInterval(function(){
      if(!window.dito) return;

      ditoTopBarInit();

      var networks = {};
      <?php if(get_option('dito_login_modal_facebook_enabled')){ ?>
        networks['facebook'] = {
          text: '<?php echo get_option("dito_login_modal_facebook_button_text"); ?>',
          appendTo: '#dito-topbar-login-facebook',
          scope: '<?php echo get_option("dito_login_modal_facebook_scope"); ?>',
          callback: function(response){
            ditoSigninUser(response);
          }
        }
      <?php } ?>

      <?php if(get_option('dito_login_modal_google_enabled')){ ?>
        networks['googlePlus'] = {
          text: '<?php echo get_option("dito_login_modal_google_button_text"); ?>',
          appendTo: '#dito-topbar-login-google',
          scope: '<?php echo get_option("dito_login_modal_google_scope"); ?>',
          callback: function(response){
            ditoSigninUser(response);
          }
        }
      <?php } ?>

      dito.Plugins.Login.add(networks);

      clearInterval(ditoInterval);
    }, 500);
  }());
</script>