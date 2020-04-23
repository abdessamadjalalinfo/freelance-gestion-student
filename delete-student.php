<?php
require 'bdd.php';
?>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

    <body>
    
        <?php require('header.php'); ?>
        <div class="container">
        <div class="alert alert-danger" role="alert">
  Delete Student
</div>
        <form method='Post' action='delete.php'>
        <label for="student">Choose a  student</label>
        <?php 
        $reponse = $bdd->query('SELECT * FROM users');?>
        <select name='id'>
        <?php while ($donnees = $reponse->fetch()) { ?>
        <option name='id' value=<?php  echo $donnees['id'];  ?> ><?php  echo $donnees['username'];  ?></option>
        <?php } ?>
        </select>
        
        <button type="submit" class="btn btn-primary">Delete</button>
        </form>
        </div>
    </body>