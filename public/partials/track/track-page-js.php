<?php if(is_page() && get_option("dito_page_track_enabled")){ ?>
  dito.track({
    action: 'acessou-pagina-blog',
    data: {
      pagina: '<?php echo get_the_title() ?>'
    }
  });
<?php } ?>