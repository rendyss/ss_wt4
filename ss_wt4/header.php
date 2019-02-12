<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/12/2019
 * Time: 8:48 AM
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ssWT4template = new SSWT4_Template( get_template_directory() . '/templates' );
echo $ssWT4template->render( 'header', array(
	'is_front_page' => is_front_page()
) );