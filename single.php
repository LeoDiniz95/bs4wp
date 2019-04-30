<?php   get_header();   ?>

        <!--  CONTEÚDO  -->
        <div class="row">

          <div class="col-md-8 col-sm-12">

            <!--  CARREGANDO OS POSTS DO WP  -->
            <?php  if(have_posts()) : while(have_posts()) : the_post(); ?>

                <?php   get_template_part( 'content' , get_post_format() );   ?>

              <?php endwhile; ?>

              <?php else : get_404_template();  endif; ?>

          </div>

         <?php get_sidebar(); ?>

        </div>


    </div><!--  Fim do container  -->

    <?php get_footer(); ?>