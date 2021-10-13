<?php
/**
 * Template Name: School years
 */

get_header(); ?>

<header class="flex justify-center w-full mt-20 mb-48">
<h1 class="text-schoolGreen text-4xl sans"><?php the_title(); ?></h1>
</header>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>

<?php endwhile; ?>

<?php endif; 

get_footer(); ?>

