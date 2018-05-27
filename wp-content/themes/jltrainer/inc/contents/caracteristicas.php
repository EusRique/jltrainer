<?php

add_action('init', 'create_caracteristicas');

function create_caracteristicas() 
{
    register_post_type('caracteristicas',
        array(
            'labels' => array(
                'name'          => 'Caracteristícas',
                'singular_name' => 'Caracteristicas',
                'add_new'       => 'Adicionar novo',
                'add_new_item'  => 'Adicionar nova caracteristicas',
                'edit'          => 'Edit',
                'edit_item'     => 'Editar caracteristicas',
                'new_item'      => 'Nova caracteristicas',
                'view'          => 'View',
                'view_item'     => 'Ver caracteristicas',
                'search_items'  => 'Buscar caracteristicas',
                'not_found'     => 'No planta found',
                'not_found_in_trash' => 'No planta found in Trash',
                'parent'        => 'Parent caracteristicas'
            ),
            'public'        => true,
            'menu_position' => 20,
            'menu_icon'     => 'dashicons-tag',
            'supports'      => array('title', 'thumbnail', 'editor'),
            'has_archive'   => true
        )
    );
}