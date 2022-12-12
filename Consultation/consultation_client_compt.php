<?php
include '../conec.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Image/logo.png">
    <title>Consultation Client</title>
</head>

<body>

    <?php 
      include '../Header/header_compt.php';
    ?>

    <div class="container">

     <table class="table" >
     <thead>
     <tr>
      <th scope="col">Numero</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Code Postal</th>
      <th scope="col">Ville</th>
      <th scope="col">Pays</th>
      <th scope="col">Telephone</th>
     </tr>
     </thead>

     <tbody>
   
     <?php 
  
      $sql="Select *from `clients`";
      $result=mysqli_query($baseDonnee,$sql);
      if($result){
      while($row=mysqli_fetch_assoc($result)){
      $numero=$row['numero'];
      $nom=$row['nom'];
      $prenom=$row['prenom'];
      $adresse=$row['adresse'];
      $codePostal=$row['codepostal'];
      $ville=$row['ville'];
      $pays=$row['pays'];
      $telephone=$row['telephone'];

      echo '
    <tr>
     <td scope="row">'.$numero.'</td>
     <td>'.$nom.'</td>
     <td>'.$prenom.'</td>
     <td>'.$adresse.'</td>
     <td>'.$codePostal.'</td>
     <td>'.$ville.'o</td>
     <td>'.$pays.'</td>
     <td>'.$telephone.'</td>
   </tr>';

    }}
  
    ?>
   </tbody>
   </table>

 </div>

</body>

<style>
body{
    margin: 0;
    padding: 0;
    font:12px Arial;
    box-sizing: border-box;
    width: 100%;
    height: auto;
    background-image: url('../Image/lidl.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
   	background-size: cover;
    
}

table{
    position:absolute;
    margin-top:140px;
    margin-left:200px;
    opacity:0.7;
  } 
  
table th{
    background-color:#a33722;
    color:white;
}

table,
td,
th {
    padding: 10px;
    border: 2px solid #1c87c9;
    border-radius: 5px;
    background-color: #e5e5e5;
    text-align: center;
}

</style>

</html>