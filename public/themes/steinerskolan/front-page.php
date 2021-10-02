<?php get_header(); ?>

<main role="main">

    <section class="flex justify-start welcome">
        <div class="self-end mb-20 container mx-auto">
            <div class="w-full px-10 md:px-0 md:w-[380px] md:ml-32">
                <?php if (get_field('hero_heading', 'option')) : ?>
                    <p class="text-2xl font-black md:text-4xl mb-8"><?php the_field('hero_heading', 'option'); ?></p>
                <?php endif; ?>

                <a class="bg-gray-600 rounded-2xl px-7 py-3 text-white text-lg font-bold" href="<?php the_field('hero_content_button_link', 'option'); ?>" rel="noopener noreferrer">
                    <?php the_field('hero_content_button_text', 'option'); ?>
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

    <section class="py-32" id="start">
        <div class="px-10 md:px-0 md:w-3/6 mx-auto">
            <h3 class="text-center text-2xl">
                "Waldorfpedagogiken vill skapa livslång lust till att lära genom engagemang, nyfikenhet och förundran."
            </h3>
        </div>
        <div class="flex flex-col md:flex-row container mx-auto my-32 space-y-8 md:space-y-0 md:space-x-10">
            <div class="relative">
                <img src="http://159.89.96.200/wp-content/uploads/2021/09/placeholder01.png" alt="Kid reading book under a tree">
                <p class="absolute top-2/3 py-3 text-white text-center bg-gray-600 w-full text-2xl font-bold">Om skolan</p>
            </div>
            <div class="relative">
                <img src="http://159.89.96.200/wp-content/uploads/2021/09/placeholder02.png" alt="Kid reading book under a tree">
                <p class="absolute top-2/3 py-3 text-white text-center bg-gray-600 w-full text-2xl font-bold">Pedagogik</p>
            </div>
            <div class="relative">
                <img src="http://159.89.96.200/wp-content/uploads/2021/09/placeholder03.png" alt="Kid reading book under a tree">
                <p class="absolute top-2/3 py-3 text-white text-center bg-gray-600 w-full text-2xl font-bold">Årskurser</p>
            </div>
        </div>
        <div class="px-10 md:px-0 md:w-3/6 mx-auto">
            <h3 class="text-center text-2xl">
                All kunskap öppnar dörren till ny kunskap som i sin tur väcker lust hos eleven att gå vidare.
            </h3>
        </div>
    </section>



    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <section class="container mx-auto">
                <?php the_content(); ?>
            </section>

        <?php endwhile; ?>

    <?php endif; ?>
</main>

<?php get_footer(); ?>
