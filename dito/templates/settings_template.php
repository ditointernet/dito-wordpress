<div class="wrap">
  <div id="dito-settings">
    <div id="dito-settings-header">
      <img src="<?php echo dito_plugin_url('/assets/images/settings-logo.png') ?>" />
      <div id="dito-settings-header-title">Configurações</div>
    </div><!-- #dito-settings-header -->

    <div id="dito-settings-content">
      <div id="dito-settings-notes">
        <div id="dito-settings-notes-title">Observações</div>

        <ul>
          <li>Você precisa de um aplicativo criado na platforma da <strong>Dito</strong> para usar este plugin. Não possui um ainda? <a href="http://materiais.dito.com.br/plugin-wordpress" target="_blank">Crie agora o seu</a>.</li>
          <li>As informações e estatísticas dos eventos e usuários são visualizados na plataforma da <strong>Dito</strong>.</li>
        </ul>
      </div><!-- #dito-settings-notes -->

      <form method="post" action="options.php">
        <?php settings_fields(dito_get_settings_group_name()); ?>
        <?php do_settings_sections(dito_get_settings_group_name()); ?>

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
                    Veja um exemplo na imagem ao lado.
                  </em>
                </p>
              </td>
              <td class="dito-image-tutorial">
                <a href="<?php echo dito_plugin_url('/assets/images/dashboard-tutorail-api-key.png'); ?>" target="_blank"><img src="<?php echo dito_plugin_url('/assets/images/dashboard-tutorail-api-key.png'); ?>" /></a>
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
          <h3>Barra superior</h3>

          <table class="form-table">
            <tr>
              <td>
                <input type="checkbox" name="dito_topbar_enabled" <?php if(get_option('dito_topbar_enabled')) echo "checked" ?> value="true" />
                <strong>Habilitada</strong>
              </td>
            </tr>

            <tr>
              <th scope="row">Texto</th>
              <td><input size="100" type="text" name="dito_topbar_text" value="<?php echo esc_attr( get_option('dito_topbar_text') ); ?>" /></td>
            </tr>

            <tr>
              <th scope="row">Cor do texto</th>
              <td><input size="8" type="text" name="dito_topbar_text_color" value="<?php echo esc_attr( get_option('dito_topbar_text_color') ); ?>" /></td>
            </tr>

            <tr>
              <th scope="row">Cor dos links</th>
              <td><input size="8" type="text" name="dito_topbar_link_color" value="<?php echo esc_attr( get_option('dito_topbar_link_color') ); ?>" /></td>
            </tr>

            <tr>
              <th scope="row">Cor de fundo da barra</th>
              <td><input size="8" type="text" name="dito_topbar_background_color" value="<?php echo esc_attr( get_option('dito_topbar_background_color') ); ?>" /></td>
            </tr>

            <tr>
              <th scope="row">Texto do botão de login</th>
              <td><input size="40" type="text" name="dito_topbar_button_text" value="<?php echo esc_attr( get_option('dito_topbar_button_text') ); ?>" /></td>
            </tr>

            <tr>
              <th scope="row">Cor do texto do botão de login</th>
              <td><input size="8" type="text" name="dito_topbar_button_text_color" value="<?php echo esc_attr( get_option('dito_topbar_button_text_color') ); ?>" /></td>
            </tr>

            <tr>
              <th scope="row">Cor do botão de login</th>
              <td><input size="8" type="text" name="dito_topbar_button_color" value="<?php echo esc_attr( get_option('dito_topbar_button_color') ); ?>" /></td>
            </tr>

            <tr>
              <th scope="row">Saudação ao usuário logado</th>
              <td>
                <input size="100" type="text" name="dito_topbar_greeting_text" value="<?php echo esc_attr( get_option('dito_topbar_greeting_text') ); ?>" />
                <br><em>Para escrever o nome do usuário use a tag <strong>{{name}}</strong></em>
              </td>
            </tr>
          </table>
        </div><!-- .dito-settings-box -->

        <div class="dito-settings-box">
          <h3>Login</h3>

          <table class="form-table">
            <tr>
              <th scope="row">Título</th>
              <td><input size="100" type="text" name="dito_login_modal_title" value="<?php echo esc_attr( get_option('dito_login_modal_title') ); ?>" /></td>
            </tr>

            <tr>
              <th>Redes para login</th>
              <td>
                <table>
                  <tr>
                    <td valign="top">
                      <input type="checkbox" name="dito_login_modal_facebook_enabled" <?php if(get_option('dito_login_modal_facebook_enabled')) echo "checked" ?> value="true" /> Facebook
                      <input type="checkbox" name="dito_login_modal_google_enabled" <?php if(get_option('dito_login_modal_google_enabled')) echo "checked" ?> value="true" /> Google
                      <p class="dito-how-to">
                        <em>Para que o <strong>Social Login</strong> funcione, configure as chaves de cada rede na plataforma da <strong>Dito</strong>. Veja um exemplo ao lado.</em>
                      </p>
                    </td>
                    <td valign="top" class="dito-image-tutorial">
                      <a href="<?php echo dito_plugin_url('/assets/images/dashboard-tutorail-social-keys.png'); ?>" target="_blank"><img src="<?php echo dito_plugin_url('/assets/images/dashboard-tutorail-social-keys.png'); ?>" /></a>
                      <br>
                      Clique para ampliar
                    </td>      
                  </tr>
                </table>
              </td>
              
            </tr>

            <tr>
              <th scope="row">Texto do botão do Facebook</th>
              <td><input size="40" type="text" name="dito_login_modal_facebook_button_text" value="<?php echo esc_attr( get_option('dito_login_modal_facebook_button_text') ); ?>" /></td>
            </tr>

            <tr>
              <th scope="row">Permissões de login do Facebook</th>
              <td><input size="100" type="text" name="dito_login_modal_facebook_scope" value="<?php echo esc_attr( get_option('dito_login_modal_facebook_scope') ); ?>" /></td>
            </tr>

            <tr>
              <th scope="row">Texto do botão do Google</th>
              <td><input size="40" type="text" name="dito_login_modal_google_button_text" value="<?php echo esc_attr( get_option('dito_login_modal_google_button_text') ); ?>" /></td>
            </tr>

            <tr>
              <th scope="row">Permissões de login do Google</th>
              <td><input size="100" type="text" name="dito_login_modal_google_scope" value="<?php echo esc_attr( get_option('dito_login_modal_google_scope') ); ?>" /></td>
            </tr>

            <tr>
              <th scope="row">Texto do aviso</th>
              <td><input size="100" type="text" name="dito_login_modal_warning_text" value="<?php echo esc_attr( get_option('dito_login_modal_warning_text') ); ?>" /></td>
            </tr>
          </table>
        </div><!-- .dito-settings-box -->

        <div id="dito-settings-actions">
          <?php submit_button(); ?>
        </div>
      </form>
    </div><!-- #dito-settings-content -->
  </div><!-- #dito-settings -->
</div>