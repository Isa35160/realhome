<?php /* Template Name: Gabarit proprietes */ ?>

<?php

$args = array(
    'post_type' => 'proprietes',
    'post_per_page' => 6,
    'order' => 'ASC',
);
// The Query
$the_query = new WP_Query($args);

?>

<?php get_header(); ?>

<div class="container">

    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <?php $villes = get_terms('villes', array(
                'hide_empty' => false,
            )); ?>


            <a href="<?php the_permalink() ?>">

                <?php the_title() ?> -

                <?php $id = get_the_ID(); ?>

                <?php $ville = get_term($id, 'villes'); ?>

                <?php $ville_name = $ville->name; ; ?>

                <?php if ($proprietes): ?>

                    <?php foreach ($proprietes as $propriete) { ?>
                        <?php echo $name = $propriete->name; ?>
                    <?php } ?>
                <?php endif; ?>
            </a>




        <?php endwhile; ?>
        <?php ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
