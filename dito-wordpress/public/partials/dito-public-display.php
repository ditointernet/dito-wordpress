<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://dito.com.br/
 * @since      1.0.0
 *
 * @package    Dito
 * @subpackage Dito/public/partials
 */
?>

<script type="text/javascript">
  <?php if(get_option('dito_news_email_selector') && get_option('dito_news_btn_selector') && window.dito){ ?>
    var nameSelector = "<?php echo get_option("dito_news_name_selector"); ?>";
    var emailSelector = "<?php echo get_option("dito_news_email_selector"); ?>";
    var clickSelector = "<?php echo get_option("dito_news_btn_selector"); ?>";

    var identify = function(email, name) {
      return dito.identify({
        id: dito.generateID(email),
        name: name,
        email: email,
        data: {
          origem_cadastro: 'newsletter'
        }
      });
    };

    jQuery(clickSelector).click(function (event) {
      var email = jQuery(emailSelector).val();
      var name = jQuery(nameSelector).val();

      identify(email, name);
    });
  <?php } ?>
</script>
