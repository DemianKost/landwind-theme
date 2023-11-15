<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
        <header id="header__section">
            <div class="container mx-auto flex items-center justify-between py-4">
                <div class="header__menu w-8/12 flex items-center">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" width="155" height="36" />
                    </a>
                    <nav class="ml-10">
                        <a href="#" class="text-base font-medium color-gray-900 mr-6">Company</a>
                        <a href="#" class="text-base font-medium color-gray-900 mr-6">Marketplace</a>
                        <a href="#" class="text-base font-medium color-gray-900 mr-6">Features</a>
                        <a href="#" class="text-base font-medium color-gray-900 mr-6">Team</a>
                        <a href="#" class="text-base font-medium color-gray-900">Contact</a>
                    </nav>
                </div>
                <div class="header__account w-4/12 flex items-center justify-end">
                    <a href="#" class="text-sm font-medium color-gray-900 mr-4">Log In</a>
                    <a href="#" class="text-sm font-medium text-white bg-purple-600 rounded-lg px-4 py-2">Get started</a>
                </div>
            </div>
        </header>