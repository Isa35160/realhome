<?php get_header(); ?>


<div class="img-homepage">
          <h1 class="title_home">REAL HOME L’AGENCE QUI VOUS ACCOMPAGNE
                    DANS VOTRE PROJET</h1>
          <img class="img-home" src="wp-content/themes/realhome/images/moritz-mentges-1144492-unsplash.jpg" alt="">
</div>


<div class="notre_agence container">
    <?php
    $field = get_field_object('notre_agence_au_plus_pres_de_vous');
    ?>
          <div class="notre_agence_bloc_title">
                    <h2 class="notre_agence_title"><?php echo($field['label']); ?></h2>
                    <div class="notre_agence_underline"></div>
          </div>
          <p class="notre_agence_desc"><?php the_field('notre_agence_au_plus_pres_de_vous'); ?></p>
</div>

<!--     NOS POINTS FORTS     -->

<div class="points_forts ">
          <div class="container">
              <?php if (have_rows('points_forts')): ?>

                        <ul class="points_forts_vignette">

                            <?php while (have_rows('points_forts')): the_row();

                                // vars
                                $image = get_sub_field('image');
                                $title = get_sub_field('titre');
                                $description = get_sub_field('description');

                                ?>

                                      <li class="">
                                                <div class="points_forts_img"><img src="<?php echo $image['url']; ?>"
                                                                                   alt="<?php echo $image['alt'] ?>"/>
                                                </div>
                                                <h3 class="points_forts_title"><?php echo $title; ?></h3>

                                                <div class="points_forts_description"><?php echo $description; ?></div>

                                      </li>

                            <?php endwhile; ?>

                        </ul>

              <?php endif; ?>
          </div>

</div>


<!--     NOS PROPRIETES     -->
<div class="nos-proprietes">
          <div class="container">
                    <h2 class="nos_proprietes_title"><span>Nos</span> <span style="font-weight: bold">Propriétés</span>
                    </h2>
                    <div class="nos_proprietes_underline"></div>
                    <p class="nos_proprietes_desc">Quisque diam lorem interdum vitaapibus vitae pede. Donec eget tellus
                              non
                              erat lacinia fertum. Donec in velit vel ipsum auctovinar.</p>
                    <div class="proprietes_cards">
                        <?php

                        $args = array(
                            'post_type' => 'proprietes',
                            'post_per_page' => 6,
                            'order' => 'ASC',
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

                                                                    <?php the_title() ?> -

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
                            <?php ?>

                        <?php endif; ?>
                    </div>
          </div>

<!--     NOS PARTENAIRES     -->

          <h2>Our Partners</h2>
    <?php

    $images = get_field('our_partners');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)

    if ($images): ?>
              <ul>
                  <?php foreach ($images as $image): ?>
                            <li>
                                <?php echo wp_get_attachment_image($image['ID'], $size); ?>
                            </li>
                  <?php endforeach; ?>
              </ul>
    <?php endif; ?>

</div>

<!--     NOS AGENTS     -->
<h2>Nos Agents</h2>

<?php if (have_rows('nos_agents')): ?>

          <ul class="nos_agents">

              <?php while (have_rows('nos_agents')): the_row();

                  // vars
                  $image = get_sub_field('image');
                  $name = get_sub_field('nom_prenom');
                  $presentation = get_sub_field('presentation');

                  ?>

                        <li class="">
                                  <div class="nos_agents_img"><img src="<?php echo $image['url']; ?>"
                                                                     alt="<?php echo $image['alt'] ?>"/>
                                  </div>
                                  <h3 class="nos_agents_name"><?php echo $name; ?></h3>

                                  <div class="nos_agents_presentation"><?php echo $presentation; ?></div>
                        </li>

              <?php endwhile; ?>

          </ul>

<?php endif; ?>

<?php get_footer(); ?>
