<?php
if (empty($_SESSION['user_name']) && ($_SESSION['user_logged_in'] != 1)) {
	header( 'Location: '.URL.'coder/login' ) ;          
}
?>