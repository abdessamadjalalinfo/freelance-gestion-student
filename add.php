<?php
require 'bdd.php';
$req = $bdd->prepare('INSERT INTO users(FirstName, LastName, username, password) VALUES(:firstname, :lastname, :username, :password)');
$req->execute(array(
	'firstname' => $_POST['firstname'],
	'lastname' => $_POST['lastname'],
	'username' => $_POST['username'],
	'password' => $_POST['password']
	));

echo 'Le jeu a bien été ajouté !';
header('Location: add-student.php');
?>