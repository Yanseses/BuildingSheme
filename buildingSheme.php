<?php
/**
* @package buildingSheme
*/
/*
Plugin Name: Building Sheme
Plugin URL: 
Description: My plugin for reduct sheme
Author: Yanse
Version: 1.0
*/


if (! defined ('ABSPATH')) {
	die;
}

if( is_admin ){
	require_once dirname(__FILE__) . '/admin/admin-panel.php';
}

add_action( 'wp_ajax_load_cabinet_data', 'load_cabinet' ); // wp_ajax_{ЗНАЧЕНИЕ ПАРАМЕТРА ACTION!!}
add_action( 'wp_ajax_nopriv_load_cabinet_data', 'load_cabinet' );  // wp_ajax_nopriv_{ЗНАЧЕНИЕ ACTION!!}
// первый хук для авторизованных, второй для не авторизованных пользователей

add_action( 'wp_ajax_edit_cabinet_data', 'edit_cabinet' ); // wp_ajax_{ЗНАЧЕНИЕ ПАРАМЕТРА ACTION!!}
add_action( 'wp_ajax_nopriv_edit_cabinet_data', 'edit_cabinet' ); // wp_ajax_{ЗНАЧЕНИЕ ПАРАМЕТРА ACTION!!}
 
function load_cabinet(){
	global $wpdb;

	$number = preg_replace('|([^0-9a-zA-Z]+)|','',$_POST['room_number']);
	
	if(!$number){
		echo json_encode([
			'error' => 1
		]);
		die;
	}
 
	$rooms = $wpdb->get_results("SELECT * FROM wp_shema WHERE room_number = '$number'");

	if(!$rooms){
		echo json_encode([
			'error' => 2
		]);
		die;
	}

	$room = reset($rooms);

	echo json_encode([
		'error' => 0,
		'data' => $room
	]);
	die;
}

 
function edit_cabinet(){
	global $wpdb;

	$number = preg_replace('|([^0-9a-zA-Z]+)|','',$_POST['room_number']);

	unset($_POST['action']);

	$wpdb->update(
		'wp_shema',
		$_POST,
		['room_number' => $number]
	);
	
	echo 1;
	die;
}

?>
