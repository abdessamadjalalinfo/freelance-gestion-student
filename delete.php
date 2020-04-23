

<?php
require 'bdd.php';
$req = $bdd->prepare('DELETE FROM users WHERE id =:firstname');
$req->execute(array(
	'firstname' => $_POST['id']
	));

echo 'Le jeu a bien été ajouté !';
header('Location: delete-student.php');
?>