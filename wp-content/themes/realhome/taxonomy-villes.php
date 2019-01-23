<?php get_header(); ?>
<div class="proprietes">
<div class="container">
          <h2 class="nos_proprietes_title"><span>Nos</span> <span style="font-weight: bold">Propriétés</span>
          </h2>

          <div class="villes_nav">
                    <a href="/realhome/nos-proprietes">Tous</a>


              <?php $villes = get_terms('villes', array(
                  'hide_empty' => false,
              )); ?>

              <?php foreach ($villes as $ville) { ?>

                        <a href="<?php echo get_term_link($ville->slug, 'villes'); ?>"><?php echo $ville->name; ?></a>


              <?php } ?>

          </div>
          <div class="proprietes_cards">
              <?php if (have_posts()): ?>
                  <?php while (have_posts()) : the_post(); ?>

                                  <div class="card">
                                            <div class="thumbnail"><img class="thumbnail_image"
                                                                        src="<?php the_post_thumbnail_url('medium-large') ?> "
                                                                        alt=""></div>
                                            <div class="propriete_title">
                                                      <a href="<?php the_permalink() ?>">

                                                          <?php the_title() ?>

                                                          <?php $id = get_the_ID(); ?>

                                                      </a>
                                            </div>
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
                                  <p>Aucunes propriétés trouvées pour <?php $location = get_term_by('slug', get_query_var('villes'), 'villes' ); echo $location->name ?>.</p>
                        </div>

              <?php endif; ?>

          </div>
</div>
</div>

<?php get_footer(); ?>
