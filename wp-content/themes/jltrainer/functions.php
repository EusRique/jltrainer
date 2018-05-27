<?php
	//Registro do menu
	register_nav_menus(array(
		'top-left'  => __('Top Left', 'arbo'),
    	'top-right' => __('Top Right', 'arbo'),
	));

	//habilita imagens do tipo SVG
	function add_svg_to_upload_mimes( $upload_mimes ) {
		$upload_mimes['svg'] = 'image/svg+xml';
		$upload_mimes['svgz'] = 'image/svg+xml';
		return $upload_mimes;
	}
	add_filter( 'upload_mimes', 'add_svg_to_upload_mimes', 10, 1 );

	// thumbnails
	add_theme_support('post-thumbnails');

	//Arquivo que faz o serviço pesado para menus customizados
	require get_parent_theme_file_path('/inc/walker.php');

	// Tipo de conteudo caracteristicas
	require get_parent_theme_file_path('/inc/contents/caracteristicas.php');
	
	// Tipo de conteudo serviços
	require get_parent_theme_file_path('/inc/contents/servicos.php');

	// Tipo de conteudo serviços
	require get_parent_theme_file_path('/inc/contents/galeria.php');

	// Tipo de conteudo serviços
	require get_parent_theme_file_path('/inc/contents/depoimentos.php');

	// Tipo de conteudo contato
	require get_parent_theme_file_path('/inc/contents/contato.php');
