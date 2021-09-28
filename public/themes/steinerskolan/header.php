<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_theme_file_uri('assets/app.css') ?>">
    <link rel="stylesheet" href="<?= get_theme_file_uri('assets/custom.css') ?>">

    <?php wp_head(); ?>
</head>

<body class="min-h-screen" <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="px-5 lg:flex lg:justify-between items-center mx-auto">
        <nav class="flex items-center justify-between h-[80px]">
            <div>
                <img src="http://159.89.96.200/wp-content/uploads/2021/09/logo.svg" alt="Logo">
            </div>
            <div>
                <button class="block lg:hidden" aria-label="Toggle menu" title="Toggle menu" id="menuBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </nav>

        <div class="hidden lg:flex lg:h-0 justify-center items-center h-screen" id="menuList">
            <div class="flex flex-col lg:flex-row justify-between items-center overflow-hidden">
                <ul class="lg:flex lg:space-x-8 lg:border-l lg:border-r py-2 px-8">
                    <li>Om Skolan</li>
                    <li>Pedagogik</li>
                    <li>Årskurser</li>
                    <li>Föräldrar</li>
                    <li>Ansök</li>
                    <li>Kontakt</li>
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
