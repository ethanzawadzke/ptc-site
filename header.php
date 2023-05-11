<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <style>
        @font-face {
            font-family: GraphikMedium;
            src: url('../wp-content/themes/PlotTwistConsulting/fonts/GraphikMedium.otf');
        }

        @font-face {
            font-family: GraphikLight;
            src: url('../wp-content/themes/PlotTwistConsulting/fonts/GraphikLight.otf');
        }

        @font-face {
            font-family: Akkurat;
            src: url('../wp-content/themes/PlotTwistConsulting/fonts/Akkurat.ttf');
        }

        @font-face {
            font-family: Alliance-No2-Regular;
            src: url('../wp-content/themes/PlotTwistConsulting/fonts/Alliance-No2-Regular.otf');
        }
    </style>
</head>

<?php wp_head(); ?>

<body>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <div class="header-container">
        <header id="header">
            <button id="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </button>

            <a href="/wp" id="logo">
                <div class="logoo"></div>
            </a>

            <ul class="nav-menu">
                <li class="nav-menu-item">
                    <a href="<?php echo home_url('/about'); ?>">About</a>
                </li>
                <li class="nav-menu-item">
                    <a href="<?php echo home_url('/services'); ?>">Services</a>
                            </li>
                <li class="nav-menu-item">
                    <a href="<?php echo home_url('/our-clients'); ?>">Our Clients</a>
                </li>
                <li class="nav-menu-item" id="nav-menu-contact">
                    <a href="<?php echo home_url('/contact'); ?>" class="nav-menu-item-contact">Contact</a>
                </li>
            </ul>
        </header>
    </div>