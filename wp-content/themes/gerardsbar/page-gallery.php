<?php
/**
 * Template Name: Gallery Template
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
            background: url(<?php echo get_template_directory_uri ();?>/img/bg-gallery.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>



    <div class="content c_content">

        <h1>Gallery</h1>
        <style>

            .jx-gallery-wrapper{
                display: none;
            }
            .jx-gallery-wrapper.active{
                display: block;
            }
            .jx-press-wrapper{
                display: none;
            }
            .jx-press-wrapper.active{
                display: block;
            }
        </style>




        <!--        Gallery CODE-->
        <div class="row gallery-container">

            <div class="jx-gallery-wrapper active">
                <?php
                $images = get_field('gallery_images');

                if( $images ): ?>


                        <?php foreach( $images as $image ): ?>

                        <div class="medium-4 columns gallery-item">
                            <a href="<?php echo $image['url']; ?>" title="">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </a>
                        </div>




                        <?php endforeach; ?>
                <?php endif; ?>
            </div>



        </div>



        </div><!-- #primary -->

<?php

get_footer();
