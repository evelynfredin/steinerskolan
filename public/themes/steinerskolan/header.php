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
    <header class="bg-gray-800 flex justify-between overflow-x-hidden">
        <div class="bg-gray-600 text-gray-600 w-[154px] h-[80px] mt-16 ml-6">
            Logo
        </div>
        <nav class="bg-gray-400 rounded-full w-[155px] h-[155px] relative -top-6 -right-6">
            <button aria-label="Open menu" title="Open menu" class="mx-12 mt-14">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-[47px] w-[47px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </nav>
    </header>
