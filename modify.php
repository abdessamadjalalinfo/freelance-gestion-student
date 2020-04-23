<?php
require 'bdd.php';
$req = $bdd->prepare('update users set FirstName=:firstname, LastName=:lastname,  password=:password where id =:id');
$req->execute(array(
	'firstname' => $_POST['firstname'],
	'lastname' => $_POST['lastname'],
    'password' => $_POST['password'],
    'id' =>$_POST['id']
    ));
    
    echo $_POST['firstname'];
    header('Location: modify-student.php');
?>