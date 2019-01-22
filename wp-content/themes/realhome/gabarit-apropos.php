<?php /* Template Name: Gabarit apropos */ ?>

<?php get_header(); ?>

<?php while (have_posts()): the_post() ; ?>

    <div class="container">
        <h2 class="apropos_title"><span>A</span> <span style="font-weight: bold">Propos</span></h2>

<div class="bloc_apropos">
        <div class="apropos_image"><img
                                    src="<?php the_post_thumbnail_url('large') ?> "
                                    alt=""></div>

        <div class="apropos_presentation">

            <?php the_content(); ?>

        </div>
</div>
    </div>
<?php endwhile ; ?>



<!--     NOS POINTS FORTS     -->
<div class="points_forts ">
    <div class="container">
        <?php if (have_rows('points_forts_a_propos')): ?>

            <ul class="points_forts_vignette">

                <?php while (have_rows('points_forts_a_propos')): the_row();

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
        <?php wp_reset_postdata(); ?>

    </div>

</div>


<?php include ('nos_agents.php'); ?>

<?php get_footer(); ?>
