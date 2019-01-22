<!--     NOS AGENTS     -->
<div class="nos-agents">
          <div class="container">
                    <h2 class="nos_agents_title"><span>Notre</span> <span style="font-weight: bold">Equipe</span>
                    </h2>

                    <div class="agents_cards">
                        <?php

                        $args = array(
                            'post_type' => 'agents',
                            'post_per_page' => 4,
                            'order' => 'ASC',
                        );
                        // The Query
                        $the_query = new WP_Query($args);


                        if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <?php $agents = get_terms('agents', array(
                                    'hide_empty' => false,
                                ));

                                ?>

                                            <div class="card">
                                                      <div class="agent_thumbnail"><img class="thumbnail_image"
                                                                                  src="<?php the_post_thumbnail_url('medium-large') ?> "
                                                                                  alt=""></div>
                                                      <div class="agent_title">
                                                                <a href="<?php the_permalink() ?>">

                                                                    <?php the_title() ?>

                                                                    <?php $id = get_the_ID(); ?>

                                                      </a>
                                                      </div>
                                                      <div class="agent_poste"> <?php $term_list = wp_get_post_terms($post->ID, 'postes', array("fields" => "all"));
                                                          echo $term_list[0]->name; ?></div>

                                            </div>


                            <?php endwhile; ?>
                            <?php ?>

                        <?php endif; ?>
                    </div>
          </div>
</div>
