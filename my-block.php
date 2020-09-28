<?php

/*
 * Plugin Name: My Awesome Plugin
 */


function my_block_func(){
	wp_register_script(
		'my-block-script',
		plugins_url('block.js',__FILE__),
		array('wp-blocks','wp-element')
	);

	register_block_type('my-block/text',array(
		'editor_script' => 'my-block-script'
	));
}


add_action('init','my_block_func');


