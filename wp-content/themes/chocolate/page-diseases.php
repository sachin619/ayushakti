<?php get_header(); ?>
<?php /* Template Name: Diseases */ ?> 
<?php

while (have_posts()):
    the_post();
    print_r(get_the_content());
endwhile;
?>
<?php get_footer(); ?>
