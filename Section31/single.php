<?php  get_header();?>
<div class="jumbotron animated bounceInRight">
  <?php if(have_posts()):
    while(have_posts()):
      the_post()
     ?>
       <h3><?php the_title(); ?><h3>
       <?php the_content();?>
  <?php endwhile; endif; ?>
</div>
<?php comments_template(); ?>

<?php get_footer();?>
