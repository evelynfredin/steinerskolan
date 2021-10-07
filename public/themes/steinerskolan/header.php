<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_theme_file_uri('assets/app.css') ?>">
    <link rel="stylesheet" href="<?= get_theme_file_uri('assets/custom.css') ?>">

    <?php wp_head(); ?>
</head>

<body class="min-h-screen font-sans bg-[#F8F4ED]" <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <?php $menu = wp_get_nav_menu_items('main'); ?>

    <header class="px-5 lg:flex lg:justify-between items-center mx-auto bg-transparent">
        <nav class="flex items-center justify-between h-[80px]">
            <div>
                <a href="<?= home_url(); ?>">
                    <img src="<?php the_field('site_logo', 'option') ?>" alt="Rudolf Steinerskolan" class="md:h-[55px] h-[40px] w-auto">
                </a>
            </div>
            <div class="flex space-x-8">
                <button class="block lg:hidden" aria-label="Search" title="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                <button class="block lg:hidden" aria-label="Toggle menu" title="Toggle menu" id="menuBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

            </div>
        </nav>

        <div class="hidden lg:flex lg:h-0 justify-center items-center h-screen" id="menuList">
            <div class="flex flex-col lg:flex-row justify-between items-center overflow-hidden">
                <ul class="lg:flex lg:space-x-4 lg:border-l lg:border-r py-2 px-8">
                    <?php $activePage = $wp_query->queried_object_id;
                    foreach ($menu as $menuItem) : ?>
                        <li>
                            <a class="navItem p-3 <?= $menuItem->object_id == $activePage ? 'active' : '' ?>" href="<?= $menuItem->url ?>">
                                <?= $menuItem->title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>

                </ul>
                <ul class="flex space-x-8 lg:ml-7">
                    <li>Sv</li>
                    <li class="text-black hidden lg:inline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </header>
