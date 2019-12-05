<?php

function updateSession($data){
	$CI =& get_instance();
	$CI->session->set_userdata($data);
}
?>