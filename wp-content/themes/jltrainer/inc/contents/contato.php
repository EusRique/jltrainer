<?php

add_action('init', 'create_contato');

function create_contato() 
{
    register_post_type('contato',
        array(
            'labels' => array(
                'name'          => 'Contato',
                'singular_name' => 'Contato',
                'add_new'       => 'Adicionar novo',
                'add_new_item'  => 'Adicionar nova contato',
                'edit'          => 'Edit',
                'edit_item'     => 'Editar contato',
                'new_item'      => 'Nova contato',
                'view'          => 'View',
                'view_item'     => 'Ver contato',
                'search_items'  => 'Buscar contato',
                'not_found'     => 'No planta found',
                'not_found_in_trash' => 'No planta found in Trash',
                'parent'        => 'Parent contato'
            ),
            'public'        => true,
            'menu_position' => 20,
            'menu_icon'     => 'dashicons-location',
            'supports'      => array('title', 'thumbnail'),
            'has_archive'   => true
        )
    );
}