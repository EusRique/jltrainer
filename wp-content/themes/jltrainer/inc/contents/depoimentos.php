<?php

add_action('init', 'create_depoimentos');

function create_depoimentos() 
{
    register_post_type('depoimentos',
        array(
            'labels' => array(
                'name'          => 'Depoimentos',
                'singular_name' => 'Depoimentos',
                'add_new'       => 'Adicionar novo',
                'add_new_item'  => 'Adicionar nova depoimentos',
                'edit'          => 'Edit',
                'edit_item'     => 'Editar depoimentos',
                'new_item'      => 'Nova depoimentos',
                'view'          => 'View',
                'view_item'     => 'Ver depoimentos',
                'search_items'  => 'Buscar depoimentos',
                'not_found'     => 'No planta found',
                'not_found_in_trash' => 'No planta found in Trash',
                'parent'        => 'Parent depoimentos'
            ),
            'public'        => true,
            'menu_position' => 20,
            'menu_icon'     => 'dashicons-controls-volumeon',
            'supports'      => array('title', 'thumbnail', 'editor'),
            'has_archive'   => true
        )
    );
}