<?php

/**
 * Dito Widget.
 *
 *
 * @since      1.0.0
 * @package    Dito
 * @subpackage Dito/includes
 * @author     Tannus Esquerdo <tannus.esquerdo@dito.com.br>
 */
class Dito_Widget extends WP_Widget {
  /* constructor */
	public function __construct() {
    parent::__construct (
      'Dito_Widget', // Base ID
       esc_html__( 'Dito Widget', 'dito-widget' ), // Name
       array( 'description' => esc_html__( 'Display subscription form with Dito integration.', 'dito-widget' ) ) // widget options
   );
  }

  /* form creation */
  function form( $instance ) {
    //-- get global theme options
    $waverly_color_scheme = '';

    //-- check value
    if( $instance ) {
      $widget_title       = esc_attr( $instance[ 'widget_title' ] );
      $subscribe_message  = esc_attr( $instance[ 'subscribe_message' ] );
      $title_color        = esc_attr( $instance[ 'title_color' ] );
      $text_color         = esc_attr( $instance[ 'text_color' ] );
      $button_text        = esc_attr( $instance[ 'button_text' ] );
      $bg_overlay_opacity = esc_attr( $instance[ 'bg_overlay_opacity' ] );
      $bg_overlay_color   = esc_attr( $instance[ 'bg_overlay_color' ] );
      $display_as_box     = esc_attr( $instance[ 'display_as_box' ] );
    } else {
      $widget_title       = '';
      $subscribe_message  = '';
      $title_color        = '#ffffff';
      $text_color         = '#ffffff';
      $button_text        = 'Assine Já!';
      $bg_overlay_opacity = '0.3';
      $bg_overlay_color   = $waverly_color_scheme;
      $display_as_box     = '1';
    }
    //-- end check value
?>

    <!-- widget title -->
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'widget_title' ) ); ?>">
        <?php echo esc_html_e( 'Widget Title :', 'dito-widget' ); ?>
      </label>
      <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'widget_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'widget_title' ) ); ?>" type="text" value="<?php echo esc_attr( $widget_title ); ?>" />
    </p>
    <!-- end widget title -->

    <!-- title color -->
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'title_color' ) ); ?>">
        <?php echo esc_html_e( 'Title Color :', 'dito-widget' ); ?>
        <span class="widget-form-info">( value example : #ffffff )</span>
      </label>
      <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title_color' ) ); ?>" type="text" value="<?php echo esc_attr( $title_color ); ?>" />
    </p>
    <!-- end title color -->

    <!-- subscribe message -->
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'subscribe_message' ) ); ?>">
        <?php echo esc_html_e( 'Subscribe Message :', 'dito-widget' ); ?>
      </label>
      <textarea rows="5" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'subscribe_message' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'subscribe_message' ) ); ?>"><?php echo esc_html( $subscribe_message ); ?></textarea>
    </p>
    <!-- end subscribe message -->

    <!-- text color -->
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'text_color' ) ); ?>">
        <?php echo esc_html_e( 'Text Color :', 'dito-widget' ); ?>
        <span class="widget-form-info">( value example : #ffffff )</span>
      </label>
      <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text_color' ) ); ?>" type="text" value="<?php echo esc_attr( $text_color ); ?>" />
    </p>
    <!-- end text color -->

    <!-- button text -->
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'text_color' ) ); ?>">
        <?php echo esc_html_e( 'Button Text :', 'dito-widget' ); ?>
      </label>
      <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'button_text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'button_text' ) ); ?>" type="text" value="<?php echo esc_attr( $button_text ); ?>" />
    </p>
    <!-- end button text -->

    <!-- background overlay color -->
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'bg_overlay_color' ) ); ?>">
        <?php echo esc_html_e( 'Background Overlay Color :', 'dito-widget' ); ?>
        <span class="widget-form-info">( value example : #dc32a0 )</span>
      </label>
      <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'bg_overlay_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'bg_overlay_color' ) ); ?>" type="text" value="<?php echo esc_attr( $bg_overlay_color ); ?>" />
    </p>
    <!-- end background overlay color -->

    <!-- background image overlay opacity -->
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'bg_overlay_opacity' ) ); ?>">
        <?php echo esc_html_e( 'Background Overlay Opacity :', 'dito-widget' ); ?>
        <span class="widget-form-info">( value : 0.0 to 1.0 )</span>
      </label>
      <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'bg_overlay_opacity' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'bg_overlay_opacity' ) ); ?>" type="text" value="<?php echo esc_attr( $bg_overlay_opacity ); ?>" />
    </p>
    <!-- end background image overlay opacity -->

    <!-- display as box -->
    <p>
      <input id="<?php echo esc_attr( $this->get_field_id( 'display_as_box' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'display_as_box' ) ); ?>" type="checkbox" value="1" <?php checked( '1', $display_as_box ); ?> />
      <label for="<?php echo esc_attr( $this->get_field_id( 'display_as_box' ) ); ?>">
        <?php echo esc_html_e( 'Display inside box ?', 'dito-widget' ); ?>
      </label>
    </p>
    <!-- end display as box -->
<?php
  }

  /* widget update */
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;

    //-- set new value for the fields
    $instance[ 'widget_title' ]       = strip_tags( $new_instance[ 'widget_title' ] );
    $instance[ 'subscribe_message' ]  = strip_tags( $new_instance[ 'subscribe_message' ] );
    $instance[ 'title_color' ]        = strip_tags( $new_instance[ 'title_color' ] );
    $instance[ 'text_color' ]         = strip_tags( $new_instance[ 'text_color' ] );
    $instance[ 'button_text' ]        = strip_tags( $new_instance[ 'button_text' ] );
    $instance[ 'bg_image_url' ]       = strip_tags( $new_instance[ 'bg_image_url' ] );
    $instance[ 'bg_overlay_opacity' ] = strip_tags( $new_instance[ 'bg_overlay_opacity' ] );
    $instance[ 'bg_overlay_color' ]   = strip_tags( $new_instance[ 'bg_overlay_color' ] );
    $instance[ 'display_as_box' ]     = strip_tags( $new_instance[ 'display_as_box' ] );

    return $instance;
  }
  /* end widget update */

  /* widget display */
  function widget( $args, $instance ) {
    extract( $args );

    //-- get widget options
    $widget_title           = apply_filters( 'widget_title', $instance[ 'widget_title' ] );
    $subscribe_message      = $instance[ 'subscribe_message' ];
    $title_color            = $instance[ 'title_color' ];
    $text_color             = $instance[ 'text_color' ];
    $button_text            = $instance[ 'button_text' ];
    $bg_overlay_opacity     = $instance[ 'bg_overlay_opacity' ];
    $bg_overlay_color       = $instance[ 'bg_overlay_color' ];
    $display_as_box         = $instance[ 'display_as_box' ];
    $widget_id              = $args[ 'widget_id' ];
    $smpixel_display_class  = '';

    //-- set display choice class
    if( $display_as_box == 1 ) {
      $smpixel_display_class = 'widget-display-box';
    }

    //-- custom container class
    $waverly_form_align       = '';
    $custom_container_class = 'no-box';

    if( $display_as_box == 1 ) {
      $custom_container_class = 'is-box';
      $waverly_form_align       = 'align-center';
    }

    echo $before_widget;
?>
    <div class="widget-dito <?php echo esc_attr( $custom_container_class ); ?>">
      <!-- background overlay -->
      <div class="overlay">
      </div>
      <!-- end background overlay -->

      <!-- content container -->
      <div class="content-container <?php echo esc_attr( $smpixel_display_class );?>">
        <!-- widget title -->
        <?php
          if( $widget_title ) {
            echo $before_title . esc_html( $widget_title ). $after_title;
          }
        ?>
        <!-- end widget title -->

        <!-- subscribe message -->
        <div class="subscribe-message-container">
          <p class="subscribe-message"><?php echo esc_html( $subscribe_message ); ?></p>
        </div>
        <!-- end subscribe message -->

        <!-- subscribe block -->
        <div class="subscribe-block widget-subscribe-block-<?php echo esc_attr( $widget_id ); ?>">
          <!-- subscribe form container -->
          <div class="subscribe-form-container grid-1">
            <form id="subscribe-form-<?php echo esc_attr( $widget_id ); ?>" class="subscribe-form <?php echo esc_attr( $waverly_form_align ); ?>">
              <!-- field container -->
              <div class="subscribe-field-container">
                <label class="form-label"><?php echo esc_html_e( 'E-mail', 'dito-widget' )?></label>
                <input type="email" name="email" class="custom-field" autocomplete="off" />

                <!-- animated border -->
                <div class="animated-border"></div>
                <!-- end animated border -->
              </div>
              <!-- end field container -->

              <!-- submit button -->
              <button type="submit" class="button-rounded button-1 button-small button-default-bg button-subscribe"><?php echo esc_attr( $button_text ); ?></button>
              <!-- end submit button -->
            </form>

            <!-- form notif container -->
            <div class="form-notif-container">
              <!-- form notif loading -->
              <div class="col-xs-12 no-pad form-notif form-notif-loading">
                <div class="notification-block notif-info">
                  <i class="icon dripicons-information"></i>
                  <p><?php echo esc_html_e( 'Enviando, aguarde...', 'dito-widget' ); ?></p>
                </div>
              </div>
              <!-- end form notif loading -->

              <!-- form notif success -->
              <div class="col-xs-12 no-pad form-notif form-notif-success">
                <div class="notification-block notif-success">
                  <i class="icon dripicons-checkmark"></i>
                  <p><?php echo esc_html_e( 'Success...', 'dito-widget' ); ?></p>
                </div>
              </div>
              <!-- end form notif success -->

              <!-- form notif error -->
              <div class="col-xs-12 no-pad form-notif form-notif-error">
                <div class="notification-block notif-error">
                  <i class="icon dripicons-wrong"></i>
                  <p><?php echo esc_html_e( 'Erro !!!', 'dito-widget' ); ?></p>
                </div>
              </div>
              <!-- end form notif error -->
            </div>
            <!-- end form notif container -->
          </div>
          <!-- end subscribe form container -->
        </div>
        <!-- end subscribe block -->
      </div>
      <!-- end content container -->
    </div>

    <!-- execute scripts / plugins -->
    <script type="text/javascript">
      jQuery( document ).ready( function ( $ ) {
        /**
        * ----------------------------------
        * Handlers for subscription form
        * ----------------------------------
        **/
        $( '.widget-subscribe-block-<?php echo esc_attr( $widget_id ); ?> .subscribe-form' ).validate( {
          rules: {
            email: {
              required: true,
              email: true
            }
          },
          messages: {
            email: {
              required: "<?php echo _e( 'Please insert your email address', 'dito-widget' ); ?>",
              email: "<?php echo _e( 'Your email address is not valid', 'dito-widget' ); ?>"
            }
          },
          highlight: function(element, errorClass, validClass) {
            $(element).parent().addClass('form-error');
          },
          unhighlight: function(element, errorClass, validClass) {
            $(element).parent().removeClass('form-error');
          },
          errorPlacement: function(error, element) {

          },
          submitHandler: function(form) {
            /* show loading */
            $( '.widget-subscribe-block-<?php echo esc_attr( $widget_id ); ?>' ).find( '.form-notif-container' ).addClass( 'is-visible' );
            $( '.widget-subscribe-block-<?php echo esc_attr( $widget_id ); ?>' ).find( '.form-notif-loading' ).addClass( 'is-visible' );


            /* submit the data to Dito */
            var data = {};
            var dataArray = $( form ).serializeArray();
            $.each( dataArray, function ( index, item ) {
                data[ item.name ] = item.value;
            });

            if(window.dito && data.email != null) {
              var id = dito.generateID(data.email);
              var data = { origem_cadastro: 'news-blog' };
              var data = { id_type: 'id', id: id, email: data.email, data: data };

              dito.Api.post('login', '/users/portal/'+id+'/signup', data, function(res) {
                /* if success */
                if(res.data) {
                  /* hide loading */
                  $( '.widget-subscribe-block-<?php echo esc_attr( $widget_id ); ?>' ).find( '.form-notif-loading' ).removeClass( 'is-visible' );

                  /* show success notif */
                  $( '.widget-subscribe-block-<?php echo esc_attr( $widget_id ); ?>' ).find( '.form-notif-success' ).addClass( 'is-visible' );

                  /* wait 5 secs then hide notif */
                  var delay_execute = setTimeout( function() {
                    $( '.widget-subscribe-block-<?php echo esc_attr( $widget_id ); ?>' ).find( '.form-notif-success' ).removeClass( 'is-visible' );
                    $( '.widget-subscribe-block-<?php echo esc_attr( $widget_id ); ?>' ).find( '.form-notif-container' ).removeClass( 'is-visible' );

                    clearTimeout( this );
                  }, 5000 );
                } else {
                  /* show error notif */
                  $( '.widget-subscribe-block-<?php echo esc_attr( $widget_id ); ?>' ).find( '.form-notif-error' ).addClass( 'is-visible' );

                  /* wait 5 secs then hide notif */
                  var delay_execute = setTimeout( function() {
                    $( '.widget-subscribe-block-<?php echo esc_attr( $widget_id ); ?>' ).find( '.form-notif-error' ).removeClass( 'is-visible' );
                    $( '.widget-subscribe-block-<?php echo esc_attr( $widget_id ); ?>' ).find( '.form-notif-container' ).removeClass( 'is-visible' );

                    clearTimeout( this );
                  }, 5000 );
                }
              })
            }

            /* reset subscribe form */
            $( '.widget-subscribe-block-<?php echo esc_attr( $widget_id ); ?> #subscribe-form-<?php echo esc_attr( $widget_id ); ?>' ).find( 'input[type="email"]' ).attr( 'value', '' );
            $( '.widget-subscribe-block-<?php echo esc_attr( $widget_id ); ?> #subscribe-form-<?php echo esc_attr( $widget_id ); ?>' ).find( 'input[type="email"]' ).blur();

            return false;
          }
        } );

        /**
        * ----------------------------------
        * Dynamic style
        * ----------------------------------
        **/
        var container_class = '<?php echo esc_js( $custom_container_class ); ?>';

        /* hide title line if display as box */
        if( container_class == 'is-box' ) {
          $( '#<?php echo esc_js( $widget_id ); ?> .widget-dito .widget-title .line' ).remove();
        }

        /* background image */
        $( '#<?php echo esc_js( $widget_id ); ?> .widget-dito' ).css( {
          'background' : 'url( <?php echo esc_js( $bg_image_url ); ?> ) no-repeat',
          'background-size' : 'cover',
          'background-position' : '50% 50%'
        } );

        /* background overlay */
        $( '#<?php echo esc_js( $widget_id ); ?> .widget-dito .overlay' ).css( {
          'background' : '<?php echo esc_js( $bg_overlay_color ); ?>',
          'opacity' : '<?php echo esc_js( $bg_overlay_opacity ); ?>'
        } );

        /* title color */
        $( '#<?php echo esc_js( $widget_id ); ?> .widget-title .title' ).css( {
          'color' : '<?php echo esc_js( $title_color ); ?>'
        } );

        /* text color */
        $( '#<?php echo esc_js( $widget_id ); ?> .widget-dito .subscribe-message' ).css( {
          'color' : '<?php echo esc_js( $text_color ); ?>'
        } );
      } );
    </script>
    <!-- end execute scripts / plugins -->
<?php
    echo $after_widget;
  }
} /* end class */
?>