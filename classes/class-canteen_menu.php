<?php
/**
 * Canteen Menu Class
 *
 * @package CanteenMenu
 * @author Labrak Yanis
 * @since 1.0.0
 */

// Script anti injection
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );

/*
-------------------Start of fields-------------------
*/

/*Class principale*/
class CanteenMenu
{

	/*Permet d'initaliser le plugin*/
	function canteen_menu_init()
	{

		/**
		*	Initialisation du CSS et JS
		*
		*	@since 1.0.0
		*
		*/
		// Stylesheet
		wp_enqueue_style( 'style', plugin_dir_url( __FILE__ ) . '../css/style.css', array(), "cm_style" , 'all' );
	}

	/* Fonction d'affichage des repass à venir. */
	function canteen_menu_show()
	{
		require_once CM_ABSPATH . 'classes/gui_shortcode.php';
	}

}

function canteen_menu_admin_page()
{

	/**
	*	Création de l'onglet dans l'admin panel
	*
	*	@since 1.0.0
	*
	*	@var  $page_title Titre de la page
	*	@var  $menu_title Nom dans le menu
	*	@var  $capability Qui a accès à ce menu
	*	@var  $menu_slug Le slug du menu
	*	@var  $function La fonction qui va généré le contenu de la page
	*	@var  $icon_url Icon dans le menu
	*	@var  $position Position dans le menu
	*
	*	need to be 20 by 20 pixels
	*	get_template_directory_uri() . '/img/plant.png' . '?1.0.0'
	*/
	add_menu_page(
		'Menu de la semaine', // Title dans la barre de chrome
		'Menu de la cantine', // titre de la page
		'manage_options', // Capabilities
		'settings_canteen_menu', // id de la page
		'canteen_menu_create_main_page',
		'dashicons-carrot', // Icon
		155 // Position
	);

	add_action('admin_init', 'cm_custom_settings');

}

function cm_custom_settings()
{

	/**
	*	@var $id String for use in the 'id' attribute of tags.
	*	@var $title Title of the section.
	*	@var $callback
	*	@var $page
	*/
	add_settings_section(
		'cm_settings_section',
		'', // Vide pas de nom de section
		'ne_section_gui_cm',
		'settings_canteen_menu' // Nom de la page mere
	);

	require_once CM_ABSPATH . 'classes/settings-canteen_menu.php';

}

function GetStartDate()
{
	$date_start = get_option('start_cm');
	$date_start = date("d/m/Y", strtotime($date_start));
	return $date_start;
}

function GetCurrentStartDate()
{
	if (get_option('start_cm'))
	{
		return get_option('start_cm');
	}
	else
	{
		return date("Y-m-d");
	}
}

function GetEndDate()
{
	$date_end = get_option('end_cm');
	$date_end = date("d/m/Y", strtotime($date_end));
	return $date_end;
}

function GetCurrentEndDate()
{
	if (get_option('end_cm'))
	{
		return get_option('end_cm');
	}
	else
	{
		return date("Y-m-d");
	}
}

function gui_cm()
{
}

// GUI de la section
function ne_section_gui_cm()
{
}

// Lance CanteenMenu Admin Page
add_action( 'admin_menu', 'canteen_menu_admin_page' );

/*
-------------------End of fields-------------------
*/

// Admin side
function canteen_menu_create_main_page()
{
	require('main_admin_render.php');
}

/**
*	Encapsulation de la fonction 'canteen_menu_show' pour être utilisé par la fonction add_shortcode.
*
*	@since 1.0.0
*/
function canteen_menu_c()
{
	$canteen_menu = new CanteenMenu;
	$canteen_menu->canteen_menu_show();
}

/**
*	Création du shortcode pour la fonction 'canteen_menu_c'.
*
*	@since 1.0.0
*
*	@param string      $tag    Nom donner au shortcode
*	@param string      $func   Nom de la fonction exécuté par le shortcode
*
*/
add_shortcode($tag = 'CanteenMenu', $func = 'canteen_menu_c');