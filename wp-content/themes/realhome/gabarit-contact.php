<?php /* Template Name: Gabarit contact */ ?>


<?php get_header(); ?>
          <div class="container">



<?php while (have_posts()): the_post(); ?>
          <div class="contact_title">
              <?php the_title(); ?>
          </div>
          <div><img class="contact_map"
                    src="<?php the_post_thumbnail_url('full') ?> "
                    alt=""></div>

<div class="contact_bloc_infos_form">
          <div class="contact_bloc_infos">
                    <h2 class="infos_title">Infos</h2>
                    <p><?php the_field('infos', 'option'); ?></p>
                    <p><?php the_field('adresse', 'option'); ?></p>
                    <p>Freephone : <?php the_field('freephone', 'option'); ?></p>
                    <p>Telephone : <?php the_field('telephone', 'option'); ?></p>
                    <p>Fax : <?php the_field('fax', 'option'); ?></p>
                    <p>
                         Email: <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                    </p>

          </div>
          <div class="contact_form">
                    <h2 class="form_title">Envoyez-nous un message !</h2>

              <?php the_content(); ?>

          </div>
</div>

          </div>
<?php endwhile; ?>


<?php get_footer(); ?><?php