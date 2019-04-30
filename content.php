<?php
    if( is_single() )   :
?>

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

<?php
    else :
?>

    <!--  POSTS  -->
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

<?php
    endif;
?>