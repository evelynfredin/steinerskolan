<?php get_header(); ?>

<main role="main">
    <section class="flex justify-start welcome">
        <div class="self-end mb-28 w-[360px] ml-10 md:ml-32">
            <?php if (get_field('hero_heading', 'option')) : ?>
                <h1 class="font-bold mb-8"><?php the_field('hero_heading', 'option'); ?></h1>
            <?php endif; ?>

            <a class="bg-gray-600 rounded-2xl px-7 py-3 text-white text-lg font-bold" href="<?php the_field('hero_content_button_link', 'option'); ?>" rel="noopener noreferrer">
                <?php the_field('hero_content_button_text', 'option'); ?>
            </a>

        </div>
    </section>
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>

    <?php endif; ?>
</main>

<?php get_footer(); ?>
