<?php
require 'bdd.php';
?>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

    <body>
        <?php require('header.php'); ?>
        <div class="container">
        <div class="alert alert-success" role="alert">
  Add a new student
</div>
        <form action='add.php' method='Post'>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input name='username' type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="write the username">
            
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input name='firstname' type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="for first name">
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Last Name</label>
            <input name='lastname'type="name" class="form-control" id="exampleInputPassword1" placeholder="for last name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name='password' type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
       
        <button type="submit" class="btn btn-primary">Add Student</button>
        </form>

        </div>
   </body>