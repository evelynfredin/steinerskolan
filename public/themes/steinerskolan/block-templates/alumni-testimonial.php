<?php

/**
 * Latest block Block Template.
 */

$postType = get_field('latest_posts_post_type') ?: 'alumni';
$numberOfPosts = get_field('latest_posts_number_of_posts') ?: 4;
$archiveLink = get_field('latest_posts_link_to_archive') ?: null;
$linkLabel = get_field('latest_posts_link_label') ?: 'All stuff';

$alumni = get_posts([
    'post_type' => $postType,
    'numberposts' => $numberOfPosts,
    'order' => 'desc',
]);

?>

<section class="hidden my-32 container mx-auto md:block">
    <h3 class="font-bold text-2xl text-schoolGreen my-10 text-center">Läs om tidigare elever</h3>
    <div class="h-full md:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
        <?php foreach ($alumni as $alumnus) : ?>
            <div>
                <?= get_the_post_thumbnail($alumnus); ?>

                <div class=" -mt-20 md:-mt-32 sm:-mt-40">
                    <div class="bg-gray-300 mx-5 px-8 py-6 relative shadow-lg rounded-md">
                        <h3 class="text-2xl font-bold"><?= get_the_title($alumnus); ?></h3>
                        <small><?php the_field('alumnus_occupation', $alumnus) ?></small>
                        <p class="mt-5"><?= get_the_excerpt($alumnus) ?></p>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</section>

<section class="block my-32 md:hidden container mx-auto">
    <h3 class="font-bold text-2xl text-schoolGreen my-10 text-center">Läs om tidigare elever</h3>
    <div class="carousel">
        <div class="carousel-inner">

            <input class="carousel-open" type="radio" id="<?= $alumnus->ID ?>" name="carousel" aria-hidden="true" hidden="" checked="checked">

            <?php foreach ($alumni as $alumnus) : ?>

                <div class="carousel-item">
                    <div>
                        <?= get_the_post_thumbnail($alumnus); ?>
                        <div class="-mt-20 md:-mt-32 sm:-mt-40">
                            <div class="bg-gray-300 mx-5 px-8 py-6 relative shadow-lg rounded-md">
                                <h3 class="text-2xl font-bold"><?= get_the_title($alumnus); ?></h3>
                                <small><?php the_field('alumnus_occupation', $alumnus) ?></small>
                                <p class="mt-5"><?= get_the_excerpt($alumnus) ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>
