<?php
/**
 * Plugin Name:     Responsive Image Sizes Divi
 * Description:     Divi image module with srcset attribute support. Make your website load faster
 * Author:          WP Tools
 * Author URI:      https://wptools.app
 * Text Domain:     divi-responsive-image-sizes-plugin
 * Domain Path:     /languages
 * Version:         2.0.0
 *
 * @package         Divi_Image_Srcset_Module
 */

require_once __DIR__ . '/vendor/autoload.php';

$loader = \WPT\DiviImageModule\Loader::get_instance();

$loader['name']    = 'Responsive Image Sizes Divi';
$loader['version'] = '2.0.0';
$loader['dir']     = __DIR__;
$loader['url']     = plugins_url('/' . basename(__DIR__));
$loader['file']    = __FILE__;
$loader['slug']    = 'responsive-image-sizes-divi';

$loader->run();
