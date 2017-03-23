<?php
add_action( 'init', 'telwp_register_custom_post_types_group' );
// post personalizado para miembros y abajo para discos, aqui se pone el nombre que quiera, acorde a lo que esté creando
function telwp_register_custom_post_types_group() {
    register_post_type(
        'miembros',
        array(
            'public' => true,
            'labels' => array(
                'name' => 'Miembros',
            ),
            'menu_icon' => 'dashicons-groups',
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'page-attributes'
            )
        )
    );
}

add_action( 'init', 'telwp_register_custom_post_types_cd' );

function telwp_register_custom_post_types_cd() {
    register_post_type(
        'discos',
        array(
            'public' => true,
            'labels' => array(
                'name' => 'Discografía',
            ),
            'menu_icon' => 'dashicons-format-audio',
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'page-attributes'
            )
        )
    );
}
// creación de una taxonomía, en este caso se llama rol, pero puedes ponerle el nombre que quieras
add_action( 'init', 'telwp_define_rol_taxonomy' );
function telwp_define_rol_taxonomy() {
    register_taxonomy(
        'rol',
        'miembros',
        array(
            'hierarchical' => true,
            'label' => 'Rol',
            'query_var' => true,
            'rewrite' => true
        )
    );
}