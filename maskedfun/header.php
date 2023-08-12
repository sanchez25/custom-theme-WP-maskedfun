<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/PTSerif-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Roboto-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
</head>
<body>
    <header class="header">
        <div id="fixed_header">
            <div class="close_icon"></div>
            <div class="fixed_header_block">
                <div class="fixed_header_icon"></div>
                <span class="fixed_header_text">Masked.Love - Анонимные знакомства</span>
                <a id="app_link" class="fixed_header_btn" href="https://masked.love">Начать</a>
            </div>
        </div>
        <div class="header-block">
            <div class="container">
                <a href="/" aria-label="Logo">
                    <img width="197" height="31" src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="Maskedlove logo">
                </a>
            </div>
        </div>
    </header>
