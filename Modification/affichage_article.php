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
    <title>Modification Article</title>
</head>

<body>

<?php 
  include '../Header/header.php';
?>

<div class="container">

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Reference</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Prix</th>
      <th scope="col">Operation</th>
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
      <td>
       <button id="modif"><a href="../Modification/modifier_article.php?modifierreference='.$reference.'">Modifier</a></button>
      </td>
    </tr> ';
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
    opacity:0.9;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
   	background-size: cover;
    
}

table{
    width:75%;
    position:relative;
    margin-top:155px;
    background-color:white;
    margin-left:150px;
    opacity:0.9;
} 
  
table th{
    background-color:#a33722;
    color:white;
}


table,
td,
th {
    padding: 10px;
    border-bottom: 2px solid #2596be;
    text-align: center;
    color:black;
}

button a {
    color:  #a33722;
    font-weight: bold;
    font-size: 15px;
    border-radius: 15px;
    text-decoration: none;   
}

</style>

</html>