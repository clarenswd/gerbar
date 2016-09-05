<?php
/**
 * Template Name: Menu Template
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-apo
 */
get_header(); ?>

    <style>
        html{
            background: url(<?php echo get_template_directory_uri ();?>/img/bg-menu.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>

    <div class="medium-6">
        <h1>Menus</h1>


        <div class="row menus-container">

            <?php
                $food_menu_pdf = get_field('food_menu_pdf');
                $drink_menu_pdf = get_field('drink_menu_pdf');
            ?>
            <div class="small-12 medium-6 columns menu-container">
                <?php if( $food_menu_pdf ): ?>
                    <a target="_blank" href="<?php echo $file['url']; ?>">
                        <img class="small-12 columns " src="<?php echo get_template_directory_uri ();?>/img/menu-food.svg" alt="Food menu" />
                    </a>
                <?php endif; ?>
            </div>

            <div class="small-12 medium-6 columns menu-container">
                <?php if( $drink_menu_pdf ): ?>
                    <a target="_blank" href="<?php echo $file['url']; ?>">

                        <img class="small-12 columns " src="<?php echo get_template_directory_uri ();?>/img/menu-drinks.svg" alt="Drinks menu" />

                    </a>
                <?php endif; ?>

            </div>




        </div>
    </div>



<?php

get_footer();
