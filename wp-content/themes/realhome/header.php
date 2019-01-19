<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<? bloginfo('pingback_url'); ?>">
    <script> const $menu = $('#navigation');

        $(document).mouseup(function (e) {
            if (!$menu.is(e.target) // if the target of the click isn't the container...
                && $menu.has(e.target).length === 0) // ... nor a descendant of the container
            {
                $menu.removeClass('is-active');
            }
        });

        $('.toggle').on('click', () => {
            $menu.toggleClass('is-active');
        });
    </script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title><?php wp_title(''); ?></title>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="header-nav">
            <div class="logo">
                <a class="logo" href="wp-content/themes/realhome/front-page.php"><span class="real">REAL</span><span class="home">HOME</span></a>
                <div class="border top-left"></div>
                <div class="border top-right"></div>
                <div class="border bottom-left"></div>
                <div class="border bottom-right"></div>
            </div>
            <div class="nav_principal">
                <?php wp_nav_menu(array('theme_location' => 'menu-principal', 'container' => 'nav')); ?>
            </div>
            <div class="nav_rs">
                <?php wp_nav_menu(array('theme_location' => 'menu-secondaire', 'container' => 'nav')); ?>
            </div>
        </div>
    </div>



</header>