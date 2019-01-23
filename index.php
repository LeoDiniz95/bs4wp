<?php   get_header();   ?>

        <!--  CONTEÚDO  -->
        <div class="row">

          <!--  POSTAGENS -->
          <div class="col-md-8 col-sm-12">

            <!--  CARREGANDO OS POSTS DO WP  -->
            <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>


                  <!--  POST 1  -->
                  <div class="blog-post">
                    <h3 class="mb-3 pb-2 border-bottom"><a href="<?php  the_permalink();  ?>"><?php  the_title();  ?></a></h3>

                    <!--  Postagem  -->
                    <div class="row">
                      <div class="col-6 mb-3">
                          <a href="<?php  the_permalink();  ?>">
                              <?php the_post_thumbnail('post-thumbnail', array('class'  =>  'img-fluid')); ?>
                          </a>
                      </div>
                      <!--  Texto do Post  -->
                      <div class="col-6 mb-3">
                        <?php the_excerpt(); ?>
                      </div>
                    </div>
                    <p class="text-muted">Publicado em: <span class="badge badge-my-color-2"><?php echo get_the_date('d/m/Y'); ?></span></p>
                  </div>

              <?php endwhile; ?>

              <?php else : get_404_template();  endif; ?>

                <div class="blog-pagination mb-5">

                    <!--  Botão de posts mais antigos -->
                    <?php
                      next_posts_link('Mais antigos');
                    ?>
                    <!--  Botão de posts mais novos -->
                    <?php
                      previous_posts_link('Mais novos');
                    ?>

                </div>

          </div>

         <?php get_sidebar(); ?>

        </div>


    </div><!--  Fim do container  -->

    <?php get_footer(); ?>