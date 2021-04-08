<?php
/**
 * Plugin Name: l2d-custom-block-styles
 * Plugin URI: https://github.com/lunaluna/l2d-custom-block-styles-plugin
 * Description: custom block styles for block editor
 * Author: Hiroki Saiki
 * Author URI: https://lunalunadesign.net/
 * Version: 1.0.3
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function l2d_custom_block_styles_assets() {
	wp_register_style(
		'l2d-custom-block-styles',
		plugins_url( 'dist/l2d-custom-block-styles.min.css', __FILE__ ),
		array(),
		filemtime( plugin_dir_path( __FILE__ ) . 'dist/l2d-custom-block-styles.min.css' )
	);

	register_block_style(
		'core/group',
		array(
			'name'         => 'group-block__caution',
			'label'        => 'デザインブロック [caution]',
			'style_handle' => 'l2d-custom-block-styles-css',
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'         => 'group-block__summary',
			'label'        => 'デザインブロック [summary]',
			'style_handle' => 'l2d-custom-block-styles-css',
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'         => 'group-block__advertise',
			'label'        => 'デザインブロック [advertise]',
			'style_handle' => 'l2d-custom-block-styles-css',
		)
	);
}
add_action( 'init', 'l2d_custom_block_styles_assets' );
