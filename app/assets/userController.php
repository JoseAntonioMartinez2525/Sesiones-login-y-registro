<?php
if (!isset($_SESSION)) {
	session_start();
}
require '../login-register/user.php';
include "connectionCtrl.php";

class UserController extends user{

}
 if (isset($_GET['action'])) {
 	# code...
 }
?>