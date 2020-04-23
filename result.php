<?php
echo $_POST['id'];
echo $_POST['webprogramming'];
echo $_POST['java'];
echo $_POST['mobileapp'];
?>

<?php
require 'bdd.php';
$req = $bdd->prepare('update users set WebProgramming=:web, JavaProgramming=:java,  MobileApp=:mobile where id =:id');
$req->execute(array(
	'web' => $_POST['webprogramming'],
	'java' => $_POST['java'],
    'mobile' => $_POST['mobileapp'],
    'id' =>$_POST['id']
    ));
    
    
    header('Location: add-result.php');
?>