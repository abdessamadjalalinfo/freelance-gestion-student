<?php
require 'bdd.php';
?>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

    <body>

        <?php require('header.php'); ?>
        <div class="container">
        <div class="alert alert-dark" role="alert">
  Add result or modify
</div>
        <form method='Post' action='add-result.php'>
        <label for="student">Choose a  student</label>
        <?php 
        $reponse = $bdd->query('SELECT * FROM users');?>
        <select name='id'>
        <?php while ($donnees = $reponse->fetch()) { ?>
        <option name='id' value=<?php  echo $donnees['id'];  ?> ><?php  echo $donnees['username'];  ?></option>
        <?php } ?>
        </select>
        
        <button type="submit" class="btn btn-primary">choose</button>
        </form>
        <?php if (isset($_POST['id'])) { 
            ?>
            <form method='post'action='result.php'>
        <div class="form-group">
        <input type='hidden' name='id'  value='<?php echo $_POST['id'];?>' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

            <label for="exampleInputEmail1">Web Programming</label>
            <input name='webprogramming'  class="form-control"   value=
            <?php
            $id=$_POST['id'];
        $reponse = $bdd->query("SELECT * FROM users where id=$id ");
        $donnees = $reponse->fetch();
        echo $donnees['Webprogramming'];?> >
            
            
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mobile App</label>
            <input name='mobileapp' type="text" class="form-control" id="exampleInputPassword1" value=<?php echo $donnees['MobileApp'];?> >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Java </label>
            <input name='java'type="text" class="form-control" id="exampleInputPassword1" value=<?php echo $donnees['JavaProgramming'];?> >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>



        <?php }?>
        </div>
        

   </body>
            
            
    

