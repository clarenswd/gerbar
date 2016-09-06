<?php
/**
 * Template Name: Random Template
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
            background: url(<?php echo get_template_directory_uri ();?>/img/mcup-bg.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            -webkit-font-smoothing: antialiased;

        }
        .content ,.content h1{
            color: #505050;
        }

        .content p{
            font-weight: 400;
        }

        strong{
            font-weight: 700;
        }

        .mcup-gallery{
            padding: 0.9375rem;
            padding-left: 60px;
            padding-right: 60px;

        }

        .header-container{
            text-align: center;
            padding-bottom: 5px;
        }

        .header-container img{
            max-width: 423px;
            width: 90%;
        }

        .mcup-gallery img{
            width: 100%;
            margin-bottom: 10px;
        }

        .about-event a{
            color: #505050;
            text-decoration: underline;
        }

        .footer{
            margin: 30px 60px;
            border-top: 1px solid #505050;
            border-bottom: 1px solid #505050;
            text-align:center;
            padding-bottom: 3px;
        }


        .text-content{
            padding: 30px 60px;
        }
        @media screen and (max-width:640px){
            .text-content{
                padding: 30px 30px!important;
            }
            .mcup-gallery {
                padding: 0.9375rem;
                padding-left: 30px;
                padding-right: 30px;
            }
        }

        @media screen and (max-width: 640px){
            .footer{
                margin: 30px 30px;
                padding-bottom: 30px!important;
                padding-top:30px!important;
            }
        }


        .footer img{
            margin: 15px 0px 15px;
        }

        @media (min-width: 641px){
            .mcup-gallery .one{
                padding-left: 0px;
            }
            .mcup-gallery .two{
                padding-right: 0px;
            }
        }

        @media (max-width: 641px){
            .mcup-gallery .one{
                padding-left: 0px;
                padding-right: 0px;
            }
            .mcup-gallery .two{
                padding-left: 0px;
                padding-right: 0px;
            }

            .footer img{

                padding: 0px;
                margin: 0px;

            }

        }

    </style>

    <div class="content" style="background: white;padding: 0px;padding-bottom: 20px;">

        <div class="header-container" style="background: #fff9ed;">
            <img src="<?php echo get_template_directory_uri ();?>/img/mcup-h.gif" alt="Melbourne Cup" />
        </div>



        <div class="text-content">

            <h1>Gerard’s Bistro blossoms as Melbourne Cup takes over James St</h1>

            <p><strong>For the second year in a row, Gerard’s Bistro will bring the luxury and extravagance of Melbourne Cup to James Street with an exclusive race day event.</strong></p>
            <p>Gerard’s Bistro and its surrounding laneways will bloom from a concrete jungle into a lavish flower market, reminiscent of a springtime bazaar.</p>
        </div>

        <div class="row mcup-gallery">

            <div class="medium-6 columns one">
                <!-- <a href="mcup-1.jpg" title=""> -->
                <img src="<?php echo get_template_directory_uri ();?>/img/mcup-1.jpg" />
                <!-- </a> -->
            </div>

            <div class="medium-6 columns two">
                <!-- <a href="mcup-1.jpg" title=""> -->
                <img src="<?php echo get_template_directory_uri ();?>/img/mcup-2.jpg" />
                <!-- </a> -->
            </div>
        </div>


        <div class="text-content about-event">
            <p><strong>WHEN /</strong>  Tuesday 3rd November</p>
            <p><strong>WHERE /</strong>  Gerard's Bistro + Laneways, 15 James St, Fortitude Valley 4006</p>
            <p><strong>TIME /</strong>  11am - 4pm</p>
            <p><strong>EAT /</strong> Fresh seafood, cured meats, delectable canapés and a selection of Gerard's Bistro favourites, led by award-winning chef Ben Williamson</p>
            <p><strong>DRINK /</strong>  G.H. Mumm French Champagne, premium beer, wine, spirits and cocktails</p>
            <p><strong>FEATURING /</strong>  Mercedes Benz Fashions Off The Field, large screens to view the race, live DJs and race day sweeps</p>
            <p><strong>TICKETS /</strong>  All inclusive for $195 per person. Available for purchase at <strong><a href="https://www.eventbrite.com.au/e/melbourne-cup-2015-tickets-18268529664" target="_blank">Eventbrite</a></strong>.</p>
            <p><strong>VIP BOOKINGS /</strong> Entire booth (12 guests) for $4000, available for purchase on <a style="text-decoration:none;" href="tel:0738540994">(07) 3854 0994</a></p>
        </div>

        <div class="cta" style='background: #fff9ed;padding: 26px;text-align:center;'>
            <a href="https://www.eventbrite.com.au/e/melbourne-cup-2015-tickets-18268529664" target="_blank"><img src="<?php echo get_template_directory_uri ();?>/img/purchase.gif" alt="purchase tickets" /></a>
        </div>


        <div class="footer">
            <!-- <img style="max-width: 450px;width: 80%;margin-bottom:20px;" src="img/credits.gif" alt="credits" /> -->
            <img src="<?php echo get_template_directory_uri ();?>/img/gh-mumm.gif" alt="GH. Mumm"/><img src="<?php echo get_template_directory_uri ();?>/img/mbenz.gif" alt="Mercedes Benz" />

        </div>


    </div>

<?php

get_footer();
