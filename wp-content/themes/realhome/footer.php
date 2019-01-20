<?php wp_footer(); ?>

<footer>
          <div class="container">
                    <div class="footer-nav">
                              <div class="footer-logo-rs">
                                        <div class="footer-logo">
                                                  <a class="logo" href="/realhome"><span class="real">REAL</span><span
                                                                      class="home">HOME</span></a>
                                                  <div class="footer_logo_border footer-top-left"></div>
                                                  <div class="footer_logo_border footer-top-right"></div>
                                                  <div class="footer_logo_border footer-bottom-left"></div>
                                                  <div class="footer_logo_border footer-bottom-right"></div>
                                        </div>
                                        <div class="footer_nav_rs">
                                            <?php wp_nav_menu(array('theme_location' => 'menu-secondaire', 'container' => 'nav')); ?>
                                        </div>
                              </div>
                              <div class="footer_nav_principal">
                                        <h3 class="footer_title">Menu</h3>
                                  <?php wp_nav_menu(array('theme_location' => 'menu-principal', 'container' => 'nav')); ?>
                              </div>
                              <div></div>
                              <div></div>
                              <div class="footer_contact">
                                        <h3 class="footer_title">Contact</h3>
                                        <p><?php the_field('adresse', 'option'); ?></p>
                                        <p>Freephone : <?php the_field('freephone', 'option'); ?></p>
                                        <p>Telephone : <?php the_field('telephone', 'option'); ?></p>
                                        <p>Fax : <?php the_field('fax', 'option'); ?></p>
                                        <p><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>


                              </div>

                    </div>
          </div>


</footer>