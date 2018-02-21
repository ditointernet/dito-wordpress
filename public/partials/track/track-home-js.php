<?php if(is_home() && get_option("dito_home_track_enabled")){ ?>
  dito.track({
    action: 'acessou-home-blog'
  });
<?php } ?>