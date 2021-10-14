<?php
/**
 * Template Name: Contact
 */

get_header(); ?>
<main class="flex flex-col items-center w-full mb-40"> 
<header class="flex justify-center w-full mt-20 mb-24">
<h1 class="text-schoolGreen text-4xl lg:text-7xl sans"><?php the_title(); ?></h1>
</header>
<div class="max-w-[800px] text-center ml-1 mr-1 text-schoolGreen">  <?php the_content(); ?> </div>
</main>
<?php get_footer() ?>