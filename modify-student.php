<?php
require 'bdd.php';
?>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

    <body>
        <?php require('header.php'); ?>
        <div class="container">
        <form method='Post' action='modify.php'>
        <label for="student">Choose a  student</label>
        <?php 
        $reponse = $bdd->query('SELECT * FROM users');?>
        <select name='id'>
        <?php while ($donnees = $reponse->fetch()) { ?>
        <option name='id' value=<?php  echo $donnees['id'];  ?> ><?php  echo $donnees['FirstName'].'-';echo $donnees['LastName'];  ?></option>
        <?php } ?>
        </select>
        <div class="form-group">
            <label for="exampleInputEmail1">First name</label>
            <input name='firstname' type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Firstname">
            
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last name</label>
            <input name='lastname' type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lastname">
            
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input name='password' type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password">
            
        </div>
        
        <button type="submit" class="btn btn-primary">Modify</button>
        </form>
        </div>
    </body>