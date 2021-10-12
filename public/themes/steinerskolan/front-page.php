<?php get_header(); ?>

<main role="main">

    <!-- <section class="flex justify-start welcome bg-highlight">
        <div class="self-end mb-20 container mx-auto">
            <img src="http://159.89.96.200/wp-content/themes/steinerskolan/assets/img/home.png" alt="" class="w-full h-auto mb-5 lg:w-[600px]">
            <div class="w-full px-10 md:px-0 md:ml-32">
                <?php if (get_field('hero_heading', 'option')) : ?>
                    <p class="text-2xl waldorf text-contrast font-black mb-8">
                        Välkommen till </br> <span class="text-4xl">Rudolf Steinerskolan</span>
                    </p>
                <?php endif; ?>

                <a href="<?php the_field('hero_content_button_link', 'option'); ?>" rel="noopener noreferrer">
                    <div class="bg-mainBtn w-[172px] h-[64px] flex justify-center items-center text-schoolGreen waldorf text-2xl hover:opacity-95">
                        <?php the_field('hero_content_button_text', 'option'); ?>
                    </div>
                </a>
            </div>

            <div class="flex justify-center mt-14">
                <a href="#start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-contrast stroke-current cursor-pointer animate-bounce hover:animate-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="chevron">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
            </div>
        </div>
    </section> -->


    <section class="w-screen bg-highlight flex lg:items-center welcome">
        <div class="container px-5 mx-auto h-full lg:px-32 flex flex-col justify-center overflow-hidden">
            <div class="flex lg:w-4/5 text-right place-self-center lg:place-self-end mb-10 lg:mb-0">
                <img src="http://159.89.96.200/wp-content/themes/steinerskolan/assets/img/home-min.png" class="w-full h-auto">
            </div>
            <div class="w-full">
                <?php if (get_field('hero_heading', 'option')) : ?>
                    <p class="text-2xl waldorf text-contrast font-black mb-8">
                        <?php the_field('hero_heading', 'option'); ?>
                    </p>
                <?php else : ?>
                    <p class="text-2xl waldorf text-contrast font-black mb-8">
                        Välkommen till </br> <span class="text-4xl">Rudolf Steinerskolan</span>
                    </p>
                <?php endif; ?>
                <a href="<?php the_field('hero_content_button_link', 'option'); ?>" rel="noopener noreferrer">
                    <div class="bg-mainBtn w-[172px] h-[64px] flex justify-center items-center text-schoolGreen waldorf text-2xl hover:opacity-95">
                        <?php the_field('hero_content_button_text', 'option'); ?>
                    </div>
                </a>
            </div>
            <div class="flex justify-center mt-24 mb-0 lg:my-0 lg:mb-14">
                <a href="#start">
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
