<?php

include '../components/Session.php';

$users = array(
	'guilherme@silmaq.com.br' => 123,
	'bruna@silmaq.com.br' => 321
);

$email = isset($_POST['email']) ? strtolower($_POST['email']) : false;
$password = isset($_POST['password']) ? $_POST['password'] : false;

if (!isset($users[$email]) OR $users[$email] != $password) {
	echo 1;
} else {
	$session = new Session;
	$session->register('authenticated', 1);
}