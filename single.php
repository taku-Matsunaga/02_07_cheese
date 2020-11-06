<?php get_header(); ?>

  <section class="topic">

<?php
if(have_posts()):
  while(have_posts()):the_post();

  get_template_part('content-single');

endwhile;
endif;
?>

</section>

<?php get_footer(); ?>

