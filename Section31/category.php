<?php  get_header();?>

<div class="jumbotron animated bounceInRight">
  <?php if(have_posts()):
    while(have_posts()):
      the_post()
     ?>
     <div  class="post">
       <h3><?php the_title(); ?><h3>
       <?php the_excerpt();?>
       <a href="<?php the_permalink(); ?>" class="button-primary">Leia mais</a>
    </div>
  <?php endwhile; endif; ?>
</div>
<?php get_footer();?>
