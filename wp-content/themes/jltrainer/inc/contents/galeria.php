<?php

add_action('init', 'create_galeria');

function create_galeria() 
{
    register_post_type('galeria',
        array(
            'labels' => array(
                'name'          => 'Galeria',
                'singular_name' => 'Galeria',
                'add_new'       => 'Adicionar novo',
                'add_new_item'  => 'Adicionar nova galeria',
                'edit'          => 'Edit',
                'edit_item'     => 'Editar galeria',
                'new_item'      => 'Nova galeria',
                'view'          => 'View',
                'view_item'     => 'Ver galeria',
                'search_items'  => 'Buscar galeria',
                'not_found'     => 'No planta found',
                'not_found_in_trash' => 'No planta found in Trash',
                'parent'        => 'Parent galeria'
            ),
            'public'        => true,
            'menu_position' => 20,
            'menu_icon'     => 'dashicons-format-gallery',
            'supports'      => array('title', 'thumbnail', 'editor'),
            'has_archive'   => true
        )
    );
}