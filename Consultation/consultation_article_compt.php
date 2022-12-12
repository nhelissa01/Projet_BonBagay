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
    <title>Consultation Article</title>
</head>

<body>

    <?php 
      include '../Header/header_compt.php';
    ?>

    <div class="container">

    <table style="width:100%">
    <thead>
    <tr>
      <th scope="col">Reference</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Prix</th>
    </tr>
    </thead>
    <tbody>

    <?php 

     $sql="Select *from `articles`";
     $result=mysqli_query($baseDonnee,$sql);
     if($result){
     while($row=mysqli_fetch_assoc($result)){
     $reference=$row['reference'];
     $nom=$row['nom'];
     $description=$row['description'];
     $prix=$row['prix'];
    
     echo '
     <tr>
     <td scope="row">'.$reference.'</td>
     <td>'.$nom.'</td>
     <td>'.$description.'</td>
     <td>'.$prix.'</td>
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
    margin-top:170px;
    opacity:0.7;
    
} 
  
table th{
    background-color:#a33722;
    color:white;
}


table,
td,
th {
    padding: 5px;
    border: 1px solid #1c87c9;
    border-radius: 5px;
    background-color: #e5e5e5;
    text-align: center;
}

</style>

</html>