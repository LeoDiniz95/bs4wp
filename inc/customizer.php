<?php

function bs4wp_customize_register($wp_customize){

    // RODAPÉ
    $wp_customize       -> add_section('footer', array(
        'title'         =>  __('Rodapé', 'BS 4 + WP'),
        'description'   => sprintf(__('Opções para o rodapé', 'BS 4 + WP')),
        'priority'      => 20
    ));

    # Título do rodapé
    $wp_customize       -> add_setting( 'footer_title', array(
        'default'       => _x('Meu tema', 'BS 4 + WP'),
        'type'          => 'theme_mod'
    ));

    $wp_customize       -> add_control('footer_title', array(
        'label'         => __('Título do rodapé', 'BS 4 + WP'),
        'section'       => 'footer',
        'priority'      => 1
    ));

    # Texto do rodapé
    $wp_customize       -> add_setting( 'footer_text', array(
        'default'       => _x('Feito por alguém que gosta de coisas que outras pessoas não gostam', 'BS 4 + WP'),
        'type'          => 'theme_mod'
    ));

    $wp_customize       -> add_control('footer_text', array(
        'label'         => __('Texto do rodapé', 'BS 4 + WP'),
        'section'       => 'footer',
        'priority'      => 2
    ));

}

add_action( 'customize_register', 'bs4wp_customize_register' );

?>