<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	if(isset($_SESSION["email"])){
		session_unset();
        session_destroy();
        echo 1;
	}
    else{
        echo 0;
    }
?>