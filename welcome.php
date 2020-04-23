<?php
require 'bdd.php';
?>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

    <body>
    <?php 
        //echo $username=$_POST['username'];
        //echo $password=$_POST['password'];
        $req = $bdd->prepare('SELECT * FROM users WHERE username = ?  AND password = ? ');
        $req->execute(array($_POST['username'], $_POST['password']));
        $nb_enregistrements = $req->rowCount();
        if ($nb_enregistrements>0){
        $donnees = $req->fetch();
            if ($_POST['username']=="admin"){
                //echo "Hi  admin";
                require('header.php'); 
            }
            else {
                //echo "hi-student";
                ?>

<div class="alert alert-success" role="alert" style='text-align:center;'>
  <strong> Hi <?php echo $donnees['FirstName']; ?> <?php echo $donnees['LastName']; ?>
  </strong>
  <a class="nav-link disabled" href="http://localhost/freelance-student/Login" tabindex="-1" aria-disabled="true">Logout</a>
</div>
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Web programming</th>
      <th scope="col">Java programming</th>
      <th scope="col">Mobile App</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $donnees['FirstName']; ?></td>
      <td> <?php echo $donnees['LastName']; ?></td>
      <td> <?php echo $donnees['Webprogramming']; ?></td>
      <td><?php echo $donnees['JavaProgramming']; ?></td>
      <td><?php echo $donnees['MobileApp']; ?></td>
    </tr>
    
    
  </tbody>
</table>








                <?php
            }

        }
        else
        {
            echo "username or password failed";
        }
        /*req->execute(array(
            'username' => $_POST['username'],
            'password' => $_POST['password']
            ));*/
        
        
        
        //require('header.php'); ?>
   </body>
            
            
    

