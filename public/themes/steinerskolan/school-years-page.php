<?php
/**
 * Template Name: School years 
 */
global $wp;
$current_slug = $wp->request;
get_header(); ?>

<header class="flex justify-center w-full mt-20 mb-48">
<h1 class=""><?php the_title(); ?></h1>
</header>

<?php

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'arskurser',
    'posts_per_page' => 10,
);
$arr_posts = new WP_Query( $args );
  
if ( $arr_posts->have_posts() ) :
  
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?> 
       <div class="flex justify-center w-screen relative overflow-x-hidden">
           
       <a href="<?php the_permalink(); ?>">
       <article class="mb-10" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail();
            endif;
            ?>
            <button class="absolute top-2/3 py-3 text-white text-center bg-gray-600 w-full max-w-[800px] text-2xl font-bold"><?php the_title(); ?></button>
            
               </a>
        </article>
        </div>
        <?php
    endwhile;
endif;


get_footer(); ?>
