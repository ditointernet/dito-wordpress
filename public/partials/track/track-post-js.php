<?php if(is_single() && get_option("dito_post_track_enabled")){
  $categories = array();

  foreach(get_the_category() as $category){
    array_push($categories, $category->cat_name);
  }
?>
  dito.track({
    action: 'acessou-post-blog',
    data: {
      titulo_post: '<?php echo get_the_title() ?>',
      categorias: '<?php echo join(', ', $categories) ?>',
      author: '<?php echo get_the_author() ?>',
      data_publicacao: '<?php echo get_the_date('Y-m-d') ?>',
      origem: '<?php echo $_POST['dito_track_canal_enabled'] ?>'
    }
  });
<?php } ?>