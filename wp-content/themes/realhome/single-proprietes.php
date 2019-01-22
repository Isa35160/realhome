<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php $pieces = get_field_object('pieces'); ?>

 <div class="container">

                    <h1 class="article_main_title"><?php the_field('type'); ?> <?php the_field('pieces'); ?>
                        <?php echo($pieces['append']); ?></h1>

                    <div class="bloc_article">
                              <div><img class="article_img"
                                        src="<?php the_post_thumbnail_url('full') ?> "
                                        alt=""></div>

                              <div class="bloc_infos">

                                        <div class="bloc_price">
                                                  <div class="fas fa-bookmark"></div>
                                                  <div class="article_price">
                                                      <?php $price = get_field_object('prix'); ?>
                                                      <?php echo number_format(get_field('prix'), 0, ',', ' '); ?>
                                                      <?php echo($price['append']); ?>
                                                  </div>
                                        </div>
                                        <div class="article_infos">
                                            <?php $size = get_field_object('surface'); ?>
                                            <?php $rooms = get_field_object('chambres'); ?>
                                            <?php $bathrooms = get_field_object('salle_de_bain'); ?>

                                                  <p class="article_title"><?php the_title(); ?></p>
                                                  <p class="article_pieces">Nombre de pieces
                                                            : <?php the_field('pieces'); ?></p>
                                                  <p class="artcile_city"> Ville
                                                            : <?php $term_list = wp_get_post_terms($post->ID, 'villes', array("fields" => "all"));
                                                      echo $term_list[0]->name; ?></p>
                                                  <p class="article surface"> <?php the_field('surface'); ?>
                                                      <?php echo($size['append']); ?></p>
                                                  <p class="article_rooms"> <?php the_field('chambres'); ?>
                                                      <?php echo($rooms['append']); ?></p>
                                                  <p class="article_sbd"> <?php the_field('salle_de_bain'); ?>
                                                      <?php echo($bathrooms['append']); ?></p>
                                                  <p class="article_description"> <?php the_content(); ?></p>
                                        </div>
                              </div>
                    </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php wp_reset_postdata(); ?>


    <div class="grey_br"></div>

          <h2 class="nos_proprietes_title"><span>Nos</span> <span style="font-weight: bold">Propriétés</span>
          </h2>

          <div class="proprietes_cards">
              <?php
              $term_list = wp_get_post_terms($post->ID, 'villes', array("fields" => "all"));
              $location = $term_list[0]->slug;
              $post = get_the_ID();
              $args = array(
                  'post_type' => 'proprietes',
                  'posts_per_page' => 6,
                  'order' => 'ASC',
                  'post__not_in' => array($post),
                  'tax_query' => array(
                      array(
                          'taxonomy' => 'villes',
                          'field' => 'slug',
                          'terms' => [$location],
                          'operator' => 'IN',
                      ),

                  ),
              );


              // The Query
              $the_query = new WP_Query($args);



              if ($the_query->have_posts()) : ?>
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                      <?php $proprietes = get_terms('proprietes', array(
                          'hide_empty' => false,
                      ));

                      ?>
                                  <div class="card">
                                            <div class="thumbnail"><img class="thumbnail_image"
                                                                        src="<?php the_post_thumbnail_url('medium-large') ?> "
                                                                        alt=""></div>
                                            <div class="propriete_title">
                                                      <a href="<?php the_permalink() ?>">

                                                          <?php the_title() ?>

                                                          <?php $id = get_the_ID(); ?>
                                            </div>
                                            </a>
                                            <div class="propriete_city"> <?php $term_list = wp_get_post_terms($post->ID, 'villes', array("fields" => "all"));
                                                echo $term_list[0]->name; ?></div>
                                            <div class="propriete_price">
                                                <?php $price = get_field_object('prix'); ?>
                                                <?php echo number_format(get_field('prix'), 0, ',', ' '); ?>
                                                <?php echo($price['append']); ?>
                                            </div>
                                            <div class="propriete_infos">

                                                <?php $size = get_field_object('surface'); ?>
                                                <?php $rooms = get_field_object('chambres'); ?>
                                                <?php $bathrooms = get_field_object('salle_de_bain'); ?>


                                                      <p class="surface"> <?php the_field('surface'); ?>
                                                          <?php echo($size['append']); ?></p>
                                                      <p class="chambres"> <?php the_field('chambres'); ?>
                                                          <?php echo($rooms['append']); ?></p>
                                                      <p class="sbd"> <?php the_field('salle_de_bain'); ?>
                                                          <?php echo($bathrooms['append']); ?></p>
                                            </div>
                                  </div>


                  <?php endwhile; ?>
              <?php else :

                  ?>

                        <div class="aucunes_proprietes">
                                  <p>Aucunes autre propriétés trouvées sur <?php $location ?>.</p>
                        </div>

              <?php endif; ?>
          </div>

</div>


<?php get_footer(); ?>