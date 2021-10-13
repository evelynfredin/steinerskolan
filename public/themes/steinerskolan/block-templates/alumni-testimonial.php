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
                    <div class="bg-softGreen text-schoolGreen mx-5 px-8 py-6 relative shadow-lg rounded-md">
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
    <div class="carousel">
        <div class="carousel-inner">
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item">
                <div>
                    <img src="http://159.89.96.200/wp-content/uploads/2021/10/alumni01.jpg" alt="">
                    <div class="-mt-20 md:-mt-32 sm:-mt-40">
                        <div class="bg-softGreen text-schoolGreen mx-5 px-8 py-6 relative">
                            <h3 class="text-2xl font-bold">John Doe</h3>
                            <small>Doctor at Hospital</small>
                            <p class="mt-5">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus sed suscipit felis, et ullamcorper tellus. Maecenas ac magna feugiat, vulputate mi non, dapibus augue. Suspendisse sed erat accumsan, ultricies massa vitae, tempor ante.</p>
                        </div>
                    </div>
                </div>
            </div>
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <div>
                    <img src="http://159.89.96.200/wp-content/uploads/2021/10/alumni02.jpg" alt="">
                    <div class="-mt-20 md:-mt-32 sm:-mt-40">
                        <div class="bg-softGreen text-schoolGreen mx-5 px-8 py-6 relative">
                            <h3 class="text-2xl font-bold">Jane Doe</h3>
                            <small>Lawyer at Firm</small>
                            <p class="mt-5">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus sed suscipit felis, et ullamcorper tellus. Maecenas ac magna feugiat, vulputate mi non, dapibus augue. Suspendisse sed erat accumsan, ultricies massa vitae, tempor ante.</p>
                        </div>
                    </div>
                </div>
            </div>
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <div>
                    <img src="http://159.89.96.200/wp-content/uploads/2021/10/alumni04.jpg" alt="">
                    <div class="-mt-20 md:-mt-32 sm:-mt-40">
                        <div class="bg-softGreen text-schoolGreen mx-5 px-8 py-6 relative">
                            <h3 class="text-2xl font-bold">Bruce Wayne</h3>
                            <small>Developer at Tech</small>
                            <p class="mt-5">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus sed suscipit felis, et ullamcorper tellus. Maecenas ac magna feugiat, vulputate mi non, dapibus augue. Suspendisse sed erat accumsan, ultricies massa vitae, tempor ante.</p>
                        </div>
                    </div>
                </div>
            </div>
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item">
                <div>
                    <img src="http://159.89.96.200/wp-content/uploads/2021/10/alumni03.jpg" alt="">
                    <div class="-mt-20 md:-mt-32 sm:-mt-40">
                        <div class="bg-softGreen text-schoolGreen mx-5 px-8 py-6 relative">
                            <h3 class="text-2xl font-bold">Carmen Sandiego</h3>
                            <small>Engineer at NASA</small>
                            <p class="mt-5">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus sed suscipit felis, et ullamcorper tellus. Maecenas ac magna feugiat, vulputate mi non, dapibus augue. Suspendisse sed erat accumsan, ultricies massa vitae, tempor ante.</p>
                        </div>
                    </div>
                </div>
            </div>
            <label for="carousel-3" class="carousel-control prev control-1">‹</label>
            <label for="carousel-2" class="carousel-control next control-1">›</label>
            <label for="carousel-1" class="carousel-control prev control-2">‹</label>
            <label for="carousel-3" class="carousel-control next control-2">›</label>
            <label for="carousel-2" class="carousel-control prev control-3">‹</label>
            <label for="carousel-1" class="carousel-control next control-3">›</label>

        </div>
    </div>
</section>
