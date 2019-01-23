<?php   get_header();   ?>

        <!--  CONTEÚDO  -->
        <div class="row">

          <div class="col-md-8 col-sm-12">

            <!--  CARREGANDO OS POSTS DO WP  -->
            <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>

                <?php the_post_thumbnail('post-thumbnail', array('class'  =>  'img-fluid rounded')); ?>
                 
                <h3 class="mb-3 mt-4 pt-2 border-top"><?php  the_title();  ?></h3>
                    
                <?php
                    the_content(); //Pega o conteúdo do post
                ?>

                <p class="text-muted">Publicado em: <span class="badge badge-my-color-2"><?php echo get_the_date('d/m/Y'); ?></span></p>

                <hr>

                <?php
                    comments_template();//  Adcionando os comentários
                ?>

              <?php endwhile; ?>

              <?php else : get_404_template();  endif; ?>

          </div>

         <?php get_sidebar(); ?>

        </div>


    </div><!--  Fim do container  -->

    <?php get_footer(); ?>