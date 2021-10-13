<?php

/**
 * Template Name: About school 
 */

get_header(); ?>

<header class="flex justify-center w-full mt-20 mb-24">
    <h1 class="text-schoolGreen text-4xl lg:text-7xl sans"><?php the_title(); ?></h1>
</header>

<?php

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'om-skolan',
    'posts_per_page' => 10,
);
$arr_posts = new WP_Query($args);

if ($arr_posts->have_posts()) :
    $loop_index = 0;
    while ($arr_posts->have_posts()) :
        $arr_posts->the_post();
?>


        <div class="flex justify-center items-center w-screen relative overflow-x-hidden mb-24 lg:hidden">
            <a href="<?php the_permalink(); ?>">
                <article class="pb-10 max-w-[720px]" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php
                    if (has_post_thumbnail()) :
                        the_post_thumbnail();
                    endif;
                    ?>
                    <div class="absolute bottom-1 bg-secondaryBtn secondary-button-position flex justify-center w-[267px] h-[64px]">
                        <p class="py-3 text-softGreen waldorf text-center text-2xl font-bold">
                            <?php the_title(); ?>
                        </p>
                    </div>


                </article>
            </a>

        </div>


        <div class="hidden lg:flex w-screen h-[535px] <?= $loop_index % 2 == 0 ? "flex-row" : "flex-row-reverse" ?>">
            <div class="flex max-w-1/2 min-w-1/2 w-1/2 object-cover h-full"><?php the_post_thumbnail() ?></div>
            <div class="flex max-w-1/2 min-w-1/2 w-1/2 h-full flex-col justify-between p-16 <?= $loop_index % 2 == 0 ? "bg-softGreen" : "bg-contrast" ?>">
                 <div class="flex flex-col text-schoolGreen">
                    <h1 class="mb-4 text-4xl text-schoolGreen"><?php the_title() ?></h1>
                    <p class="text-schoolGreen excerpt"><?php the_excerpt() ?></p>
                </div>
                <a class="uppercase text-right font-bold text-anotherGreen flex justify-end" href="<?php the_permalink() ?>">Läs mer <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
</svg></a>
            </div>
        </div>

<?php
        $loop_index = $loop_index + 1;

    endwhile;
endif;


get_footer(); ?>