<?php

add_action('init', 'create_servicos');

function create_servicos() 
{
    register_post_type('servicos',
        array(
            'labels' => array(
                'name'          => 'Servicos',
                'singular_name' => 'Servico',
                'add_new'       => 'Adicionar novo',
                'add_new_item'  => 'Adicionar nova servicos',
                'edit'          => 'Edit',
                'edit_item'     => 'Editar servicos',
                'new_item'      => 'Nova servicos',
                'view'          => 'View',
                'view_item'     => 'Ver servicos',
                'search_items'  => 'Buscar servicos',
                'not_found'     => 'No planta found',
                'not_found_in_trash' => 'No planta found in Trash',
                'parent'        => 'Parent servicos'
            ),
            'public'        => true,
            'menu_position' => 20,
            'menu_icon'     => 'dashicons-admin-tools',
            'supports'      => array('title', 'thumbnail', 'editor'),
            'has_archive'   => true
        )
    );
}