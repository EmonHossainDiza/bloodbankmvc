<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array (
	'register' =>  array (
		array(
		        'field' => 'name',
		        'label' => 'Name',
		        'rules' => 'required|is_unique[userinfo.name]'
		     ),
		array(
		        'field' => 'password',
		        'label' => 'Password',
		        'rules' => 'required|'
		     ),
			 array(
		        'field' => 'confpassword',
		        'label' => 'Confirm Password',
		        'rules' => 'required|matches[password]'
		     ),
			 array(
		        'field' => 'phone',
		        'label' => 'Phone number',
		        'rules' => 'required|regex_match[/^[0-9]{11}$/]'
		     ),
			 array(
		        'field' => 'email',
		        'label' => 'Email Address',
		        'rules' => 'required|valid_email|is_unique[userinfo.email]'
		     ),
			 array(
		        'field' => 'address',
		        'label' => 'Address',
		        'rules' => 'required|'
		     ),
			 array(
		        'field' => 'gender',
		        'label' => 'Gender',
		        'rules' => 'required|'
		     )
			 ),
	'editcat' => array (
		array(
		        'field' => 'name',
		        'label' => 'Categoey Name',
		        'rules' => 'required'
		     )
		),
	'login' => array (
		array(
		        'field' => 'email',
		        'label' => 'Email',
		        'rules' => 'required|'
		     ),
		array(
		        'field' => 'password',
		        'label' => 'Password',
		        'rules' => 'required|'
		     )
			 ),
		'editblooddb' => array (
		array(
		        'field' => 'price',
		        'label' => 'Name',
		        'rules' => 'required|regex_match[/^[0-9]*$/]'
		     ),
		array(
		        'field' => 'quantity',
		        'label' => 'Password',
		        'rules' => 'required|regex_match[/^[0-9]*$/]'
		     )
			 ),
			 
		'userinfoupdate' => array (
		array(
		        'field' => 'name',
		        'label' => 'Name',
		        'rules' => 'required|'
		     ),
		array(
		        'field' => 'phone',
		        'label' => 'Phone number',
		        'rules' => 'required|regex_match[/^[0-9]{11}$/]'
		     ),
		array(
		        'field' => 'address',
		        'label' => 'Address',
		        'rules' => 'required'
		     )
			 ),
			 
			 'userupdateasadmin' => array (
		array(
		        'field' => 'hemail',
		        'label' => 'Email field',
		        'rules' => 'required|'
		     ),
		array(
		        'field' => 'phone',
		        'label' => 'Phone number',
		        'rules' => 'required|regex_match[/^[0-9]{11}$/]'
		     ),
		array(
		        'field' => 'address',
		        'label' => 'Address',
		        'rules' => 'required'
		     )
			 ),

	 'updatebloodinfo' => array (
		array(
		        'field' => 'quantity',
		        'label' => 'Quantity filed',
		        'rules' => 'required|regex_match[/^[0-9]*$/]'
		     ),
		array(
		        'field' => 'price',
		        'label' => 'Price field',
		        'rules' => 'required|regex_match[/^[0-9]*$/]'
		     )
			 ),
			 
		'purchaseblood' => array (
		array(
		        'field' => 'quantity',
		        'label' => 'Quantity filed',
		        'rules' => 'required|regex_match[/^[0-9]*$/]|callback_val_check'
		     )),
			 
);
