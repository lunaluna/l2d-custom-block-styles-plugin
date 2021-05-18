<?php
/**
 * Plugin Name: L2D Custom Block Styles
 * Plugin URI: https://github.com/lunaluna/l2d-custom-block-styles-plugin
 * Description: custom block styles for block editor
 * Author: Hiroki Saiki
 * Author URI: https://lunalunadesign.net/
 * Version: 1.1.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * 定数を宣言
 */
define( 'L2D_CBS_URL', plugins_url( '', __FILE__ ) );      // プラグインURL.
define( 'L2D_CBS_PATH', plugin_dir_path( __FILE__ ) );     // プラグインPATH.


function l2d_custom_block_styles_assets() {
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

/**
 * 管理画面 および フロントにスタイルの読み込み
 */
function L2D_CBS_enqueue() {
	// プラグイン用に用意したスタイルシートの読み込み
	wp_enqueue_style( 'l2d-custom-block-styles', L2D_CBS_URL . '/dist/l2d-custom-block-styles.min.css', array(), filemtime( L2D_CBS_PATH . '/dist/l2d-custom-block-styles.min.css' ) );
}
add_action( 'admin_enqueue_scripts', 'L2D_CBS_enqueue' );
add_action( 'wp_enqueue_scripts', 'L2D_CBS_enqueue' );
