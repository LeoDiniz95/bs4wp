<?php


//Chamar a tag title
function bs4wp_title_tag(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','bs4wp_title_tag');

//Prevenção de erros na tag Title em versões antigas
if(!function_exists('_wp_render_title_tag')) {

    function bs4wp_tender_title() {
        ?>
        <title><?php wp_title('|',true,'right'); ?></title>
        <?php
    }

    add_action('wp_head','bs4wp_render_title');

}

//Registra o Custom navigation walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

//Registrando os menus
register_nav_menus( array(
    'principal' => __('Menu principal','bs4wp')
));

// Definindo as miniaturas dos posts
add_theme_support(  'post-thumbnails'   );
set_post_thumbnail_size( 1200, 720, true );//Definindo o tamanho da imagem dos thumbnails

// Ajeitando tamanho do resumo do texto
add_filter( 'excerpt_length', function($length){
        return 50;
    }
);

// Fazendo o estilo da paginação
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes(){
    return 'class="btn btn-outline-my-color-1"';
}

?>