<?php
/**
 * Template Name: School years
 */

get_header(); ?>

<header class="flex justify-center w-full mt-20 mb-48">
<h1 class="text-schoolGreen text-4xl lg:text-7xl sans"><?php the_title(); ?></h1>
</header>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div class=" m-auto grid md:grid-cols-2 xl:grid-cols-3 max-w-[1250px] ">
    <?php the_content(); ?>
</div>

<?php endwhile; ?>

<?php endif; 

get_footer(); ?>

