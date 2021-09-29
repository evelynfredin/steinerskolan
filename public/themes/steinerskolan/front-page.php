<?php get_header(); ?>

<main role="main">
    <section class="flex justify-center welcome">
        <div class="w-[154px] h-10 bg-white self-end mb-16"></div>
    </section>
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>

    <?php endif; ?>
</main>

<?php get_footer(); ?>
