<?php

    /**
	 * Lista de todos os registros
	 * OBS: Os registros das bibliotecas encontram-se no arquivo de cada uma
	 */
		// Registra os estilos personalizados
		add_action('wp_enqueue_scripts','suprema_estilos');
		// Registra os scripts do template
		add_action('wp_enqueue_scripts','suprema_scripts');
		// Registra os menus do template
		add_action('init','registra_menu');

	/**
	 * Registro dos Menus
	 */
		function registra_menu(){
    		register_nav_menus(
    		      array(
        		      'menu_left' => __('Menu Principal'),
        		      'menu_right' => __('Menu Secundário')
    		      ));
		}
		
    /**
	 * Adiciona os estilos utilizados no template
	 */
		function suprema_estilos(){
			
			wp_enqueue_style( 'custom_style', get_template_directory_uri() . '/style.css' );
			wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
			
		}
	
	/**
	 * Adiciona os scripts que serão utilizados no template
	 */
		function suprema_scripts(){
		    
		    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.1.min.js' );
		    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
		    
		}
	
	/**
	 * Adicionando suporte para o tema
	 */
		add_theme_support('post-thumbnails');
		add_theme_support('nav-menus');
	
	/**
	 * Tirar galeria do  Content
	 */
		add_filter('the_content', 'strip_shortcodes');
?>