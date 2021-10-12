<?php get_header(); ?>

<main role="main">

    <section class="flex justify-start welcome">
        <div class="self-end mb-20 container mx-auto">
            <div class="w-full px-10 md:px-0 md:w-[380px] md:ml-32">
                <?php if (get_field('hero_heading', 'option')) : ?>
                    <p class="text-2xl font-black md:text-4xl mb-8"><?php the_field('hero_heading', 'option'); ?></p>
                <?php endif; ?>

                <a href="<?php the_field('hero_content_button_link', 'option'); ?>" rel="noopener noreferrer">
                    <div class="bg-mainBtn w-[172px] h-[64px] flex justify-center items-center text-schoolGreen waldorf text-2xl">
                        <?php the_field('hero_content_button_text', 'option'); ?>
                    </div>
                </a>
            </div>

            <div class="flex justify-center mt-14">
                <a href="#start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 cursor-pointer animate-bounce hover:animate-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="chevron">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>

    <?php endif; ?>
</main>

<?php get_footer(); ?>
