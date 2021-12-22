<?php

function checkEmailValid($email)
{
	
	$pattern_email = "/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/ ";
	return (!preg_match($pattern_email, $email)) ? FALSE : TRUE;
}

?>