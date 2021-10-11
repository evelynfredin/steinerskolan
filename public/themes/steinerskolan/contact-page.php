<?php
/**
 * Template Name: Contact
 */

get_header(); ?>
<main class="flex flex-col items-center w-full mb-40"> 
<header class=" mt-20 mb-48">
<h1 class=""><?php the_title(); ?></h1>
</header>
<div class="max-w-[800px] text-center ml-1 mr-1">  <?php the_content(); ?> </div>
</main>
<?php get_footer() ?> 
