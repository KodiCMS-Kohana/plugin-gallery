<?php defined( 'SYSPATH' ) or die( 'No direct script access.' );

Plugin::factory('gallery', array(
	'title' => 'Gallery',
	'css' => 'gallery.css',
	'author' => 'KodiCMS',
	'version' => '2.0.0',
	'required_cms_version' => '12.0.0'
) )->register();