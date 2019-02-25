<?php if(is_page() && get_option("dito_page_track_enabled")){ ?>
  dito.track({
    action: 'acessou-pagina-blog',
    data: {
      pagina: '<?php echo get_the_title() ?>',
      origem: '<?php echo get_option('dito_origin') ?>'
    }
  });
<?php } ?>