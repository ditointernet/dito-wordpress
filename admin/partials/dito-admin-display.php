<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://dito.com.br/
 * @since      1.0.0
 *
 * @package    Dito
 * @subpackage Dito/admin/partials
 */
?>

<div class="wrap">
  <div id="dito-settings">
    <div id="dito-settings-header">
      <img src="<?php echo plugin_dir_url( __FILE__ ) . '../images/settings-logo.png'; ?>" />
      <div id="dito-settings-header-title">Configurações</div>
    </div><!-- #dito-settings-header -->

    <div id="dito-settings-content">
      <div id="dito-settings-notes">
        <div id="dito-settings-notes-title">Observações</div>

        <ul>
          <li>Você precisa de um aplicativo criado na platforma da <strong>Dito</strong> para usar este plugin. Não possui um ainda? <a href="https://dito.com.br/" target="_blank">Fale com um consultor</a>.</li>
          <li>As informações e estatísticas dos eventos e usuários são visualizados na plataforma da <strong>Dito</strong>.</li>
          <li>Para ajuda na configuração do plugin da Dito, acesse nossa <a href="http://developers.dito.com.br/docs/wordpress" target="_blank"> documentação.</a> </li>
          <li>Ficou com alguma dúvida? Não se preocupe! Acesse nossa <a href="http://ajuda.dito.com.br/"> central de ajuda </a> para suporte.</li>
        </ul>
      </div><!-- #dito-settings-notes -->

      <form method="post" action="options.php">
        <?php settings_fields($this->dito_get_settings_group_name()); ?>
        <?php do_settings_sections($this->dito_get_settings_group_name()); ?>

        <div id="dito-settings-box-app" class="dito-settings-box">
          <h3>Aplicação Dito:</h3>

          <table class="form-table">
            <tr>
              <th scope="row">API Key</th>
              <td>
                <input size="100" type="text" name="dito_api_key" value="<?php echo esc_attr( get_option('dito_api_key') ); ?>" />
                <p class="dito-how-to">
                  <em>
                    Para conseguir sua <strong>API Key</strong>, acesse seu aplicativo na plataforma da Dito e vá em <strong>configurações</strong>.
                    Caso não consiga encontrar sua API Key, acesse <a href= "http://developers.dito.com.br/v1.0/docs/como-encontrar-sua-api-key-e-api-secret"> esse tutorial.</a>
                  </em>
                </p>
              </td>
              <td class="dito-image-tutorial">
                <a href="<?php echo plugin_dir_url( __FILE__ ) . '../images/dashboard-tutorail-api-key.png'; ?>" target="_blank"><img src="<?php echo plugin_dir_url( __FILE__ ) . '../images/dashboard-tutorail-api-key.png'; ?>" /></a>
                <br>
                Clique para ampliar
              </td>
            </tr>
          </table>
        </div><!-- .dito-settings-box -->

        <div class="dito-settings-box">
          <h3>Trackear eventos automaticamente:</h3>

          <table class="form-table">
            <tr>
              <td>
                <input type="checkbox" name="dito_home_track_enabled" <?php if(get_option('dito_home_track_enabled')) echo "checked" ?> value="true" />
                <strong>Acesso a página inicial</strong>
              </td>
              <td>
                <input type="checkbox" name="dito_post_track_enabled" <?php if(get_option('dito_post_track_enabled')) echo "checked" ?> value="true" />
                <strong>Acessos aos posts</strong>
              </td>
              <td>
                <input type="checkbox" name="dito_page_track_enabled" <?php if(get_option('dito_page_track_enabled')) echo "checked" ?> value="true" />
                <strong>Acessos as páginas</strong>
              </td>
            </tr>
          </table>
        </div><!-- .dito-settings-box -->

        <div class="dito-settings-box">
          <h3>Newsletter</h3>

          <table class="form-table">
            <tr>
              <th scope="row">Seletor Nome</th>
              <td><input size="40" type="text" name="dito_news_name_selector" value="<?php echo esc_attr( get_option('dito_news_name_selector') ); ?>" /></td>
            </tr>

            <tr>
              <th scope="row">Seletor E-mail</th>
              <td><input size="40" type="text" name="dito_news_email_selector" value="<?php echo esc_attr( get_option('dito_news_email_selector') ); ?>" /></td>
            </tr>

            <tr>
              <th scope="row">Seletor botão</th>
              <td><input size="40" type="text" name="dito_news_btn_selector" value="<?php echo esc_attr( get_option('dito_news_btn_selector') ); ?>" /></td>
            </tr>
          </table>
        </div><!-- .dito-settings-box -->

        <div id="dito-settings-actions">
          <?php submit_button('Salvar', 'primary','submit', TRUE); ?>
        </div>
      </form>
    </div><!-- #dito-settings-content -->
  </div><!-- #dito-settings -->
</div>
