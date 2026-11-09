<?php
/**
 * Slow Pour Lite — theme bootstrap.
 *
 * The free edition of Slow Pour, made by tools/build-lite.mjs from the paid
 * build. Edit the generator, not this file.
 *
 * @package slow-pour-lite
 */

defined( 'ABSPATH' ) || exit;

define( 'SLOW_POUR_LITE_VERSION', '1.1.0' );
define( 'SLOW_POUR_LITE_DIR', get_template_directory() );
define( 'SLOW_POUR_LITE_URI', get_template_directory_uri() );

require SLOW_POUR_LITE_DIR . '/inc/setup.php';
require SLOW_POUR_LITE_DIR . '/inc/media.php';
require SLOW_POUR_LITE_DIR . '/inc/food.php';
require SLOW_POUR_LITE_DIR . '/inc/lite.php';
require SLOW_POUR_LITE_DIR . '/inc/updater.php';
