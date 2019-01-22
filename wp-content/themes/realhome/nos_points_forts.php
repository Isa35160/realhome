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
        <?php wp_reset_postdata(); ?>

    </div>

</div>
