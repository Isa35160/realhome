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
          <h2 class="notre_agence_title"><?php echo($field['label']); ?></h2>
          <div class="border-bottom-right"></div>
          <p class="notre_agence_desc"><?php the_field('notre_agence_au_plus_pres_de_vous'); ?></p>
</div>


<!--     NOS PROPRIETES     -->

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

                    <div class="container nos-proprietes">
                              <h2>Nos Propriétés</h2>
                              <p>Quisque diam lorem interdum vitaapibus vitae pede. Donec eget tellus non
                                        erat lacinia fertum. Donec in velit vel ipsum auctovinar.</p>
<div class="proprietes_cards">
                        <?php foreach ($proprietes as $propriete) { ?>
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
                                            <div class="propriete_city"><?php the_taxonomies() ?></div>
                                            <div class="propriete_infos">
                                                <?php $price = get_field_object('prix'); ?>
                                                <?php $rooms = get_field_object('chambres'); ?>
                                                <?php $bathrooms = get_field_object('salle_de_bain'); ?>

                                                      <p class="prix"> <?php the_field('prix'); ?>
                                                          <?php echo($price['append']); ?></p>
                                                      <p class="chambres"> <?php the_field('chambres'); ?>
                                                          <?php echo($rooms['append']); ?></p>
                                                      <p class="sbd"> <?php the_field('salle_de_bain'); ?>
                                                          <?php echo($bathrooms['append']); ?></p>
                                            </div>
                                  </div>
                        <?php } ?>
                    </div>
                    </div>


    <?php endwhile; ?>
    <?php ?>
<?php endif; ?>


<?php get_footer(); ?>
