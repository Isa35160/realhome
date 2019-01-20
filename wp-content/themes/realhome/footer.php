<?php wp_footer(); ?>

<footer>
    <div class="container">
        <div class="footer-nav">
            <div class="footer-logo">
                <a class="logo" href="/realhome"><span class="real">REAL</span><span class="home">HOME</span></a>
                <div class="footer_logo_border footer-top-left"></div>
                <div class="footer_logo_border footer-top-right"></div>
                <div class="footer_logo_border footer-bottom-left"></div>
                <div class="footer_logo_border footer-bottom-right"></div>
            </div>

                  <div class="nav_rs">
                      <?php wp_nav_menu(array('theme_location' => 'menu-secondaire', 'container' => 'nav')); ?>
                  </div>
            <div class="nav_principal">
                <?php wp_nav_menu(array('theme_location' => 'menu-principal', 'container' => 'nav')); ?>
            </div>

        </div>
    </div>



</footer>