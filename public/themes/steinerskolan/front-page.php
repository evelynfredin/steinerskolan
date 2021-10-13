<?php get_header(); ?>

<main role="main">

    <section class="w-screen bg-highlight flex lg:items-center welcome">
        <div class="container px-5 mx-auto h-full lg:w-[780px] flex flex-col justify-center overflow-hidden">
            <div class="flex text-right place-self-center lg:place-self-end mb-10 lg:mb-0">
                <img src="http://159.89.96.200/wp-content/themes/steinerskolan/assets/img/home-min2.png" class="w-full h-auto lazyload" alt="Rudolf Steinerskolan i Göteborg">
            </div>
            <div class="w-full">
                <?php if (get_field('hero_heading', 'option')) : ?>
                    <p class="text-2xl waldorf text-contrast font-black mb-8">
                        <?php the_field('hero_heading', 'option'); ?>
                    </p>
                <?php else : ?>
                    <p class="text-lg md:text-2xl waldorf text-contrast font-black mb-8">
                        Välkommen till </br> <span class="text-2xl md:text-4xl">Rudolf Steinerskolan</span>
                    </p>
                <?php endif; ?>
                <a href="<?php the_field('hero_content_button_link', 'option'); ?>" rel="noopener noreferrer" aria-label="Ansök" title="Ansök">
                    <div class="bg-mainBtn w-[172px] h-[64px] flex justify-center items-center text-schoolGreen waldorf text-2xl hover:opacity-95">
                        <?php the_field('hero_content_button_text', 'option'); ?>
                    </div>
                </a>
            </div>
            <div class="flex justify-center mt-24 mb-0 lg:my-0 lg:mb-14">
                <a href="#start" aria-label="Läs mer" title="Läs mer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-contrast stroke-current cursor-pointer animate-bounce hover:animate-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="chevron">
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
