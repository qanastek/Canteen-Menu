<?php
/**
* @package CanteenMenu
* @author Labrak Yanis
* @version 1.0.0
*/
/*
Plugin Name: Canteen Menu
Description: Planifiez le menu de cantine de la semaine de façon simple et rapide à l'aide de Canteen Menu.
Version: 1.0.0
Author: Labrak Yanis
Author URI: https://www.facebook.com/yanislabrak
Author email: yanis.labrak.itec@gmail.com
License: MIT
*/

/*
MIT License

Copyright (c) 2018 Labrak Yanis

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

// Anti injection script
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );


if ( ! defined( 'CM_ABSPATH' ) )
{
	define( 'CM_ABSPATH', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'CM__FILE__' ) )
{
	define( 'CM__FILE__', __FILE__ );
}

if ( ! defined( 'CM_BASENAME' ) )
{
	define( 'CM_BASENAME', plugin_basename( CM__FILE__ ) );
}

/**
 * Charge le fichier avec toutes les class.
 */
require_once CM_ABSPATH . 'classes/class-canteen_menu.php';

// Lance CanteenMenu
add_action( 'init', array( 'CanteenMenu', 'canteen_menu_init' ) );