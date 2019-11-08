<?php if(is_category() && get_option("dito_category_track_enabled")){ ?>
  dito.track({
    action: 'acessou-categoria-blog',
    data: {
      nome_categoria: '<?php echo single_cat_title() ?>'
    }
  });
<?php } ?>