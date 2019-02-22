<?php if(is_home()){ ?>
  dito.track({
    action: 'acessou-home-blog',
    data: {
      origem: '<?php echo get_option('dito_origin') ?>'
    }
  });
<?php } ?>
