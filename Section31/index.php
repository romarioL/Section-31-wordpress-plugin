<?php  get_header();?>
<div class="jumbotron animated bounceInRight">
  <?php
     $args = array('post_type' => 'post', 'showposts' => 3);
     $my_posts = get_posts($args);
     ?>

  <?php
 if($my_posts):
   foreach($my_posts as $post):
     setup_postdata($post)
    ?>
    <div  class="post">
      <h3><?php the_title(); ?><h3>
      <?php the_excerpt();?>
      <a href="<?php the_permalink(); ?>" class="button-primary">Leia mais</a>
   </div>
 <?php endforeach; endif;?>

</div>

<div class="jumbotron animated bounceInLeft">
  <?php echo do_shortcode('[Rich_Web_Video id="1"]');?>
</div>

<?php get_footer();?>
