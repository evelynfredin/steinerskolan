<?php
/**
 * Template Name: About school 
 */

get_header(); ?>

<header class="flex justify-center w-full mt-20 mb-24">
<h1 class="text-schoolGreen text-4xl sans"><?php the_title(); ?></h1>
</header>

<?php

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'om-skolan',
    'posts_per_page' => 10,
);
$arr_posts = new WP_Query( $args );
  
if ( $arr_posts->have_posts() ) :
  
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?> 
       <div class="flex justify-center items-center w-screen relative overflow-x-hidden mb-24">
           
       <a href="<?php the_permalink(); ?>">
       <article class="pb-10 max-w-[720px]" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail();
            endif;
            ?>
            <div class="absolute bottom-1 bg-secondaryBtn secondary-button-position flex justify-center w-[267px] h-[64px]"><p class="py-3 text-lighterGreen waldorf text-center text-2xl font-bold"><?php the_title(); ?></p></div>
     
            
               </a>
        </article>
        </div>
        <?php
    endwhile;
endif;


get_footer(); ?>
