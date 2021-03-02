<?php
/*
Plugin Name: WP Show Flamingo Menu
Plugin URI: 
Description: WordPressプラグイン「Flamingo」のメニューが表示されないときに使います。
Version: 1.0.0
Author: ryoさん / ryosan1210
Author URI: https://ryosan1210.net/
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'admin_menu', 'show_default_flamingo_admin_menu' );
function show_default_flamingo_admin_menu() {
	add_menu_page(
		__( 'Flamingo Address Book', 'flamingo' ),
		__( 'Flamingo', 'flamingo' ),
		'flamingo_edit_contacts',
		'flamingo',
		'flamingo_contact_admin_page',
		'dashicons-feedback',
		31
	);
}
