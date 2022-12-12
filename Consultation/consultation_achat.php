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
    <title>Consultation Achat</title>
</head>

<body>

    <?php 
      include '../Header/header.php';
    ?>

    <div class="container">

    <table class="table">
    <thead>
    <tr>
      <th scope="col">Id_achat</th>
      <th scope="col">Id_client</th>
      <th scope="col">Id_article</th>
      <th scope="col">Quantite</th>
      <th scope="col">Date</th>
    </tr>
    </thead>

    <tbody>
   
    <?php 
  
      $sql="Select *from `achats`";
      $result=mysqli_query($baseDonnee,$sql);
      if($result){
      while($row=mysqli_fetch_assoc($result)){
      $id_achat=$row['id_achat'];
      $id_client=$row['id_client'];
      $id_article=$row['id_article'];
      $quantite=$row['quantite'];
      $date=$row['date'];

    echo '
    <tr>
      <td scope="row">'.$id_achat.'</td>
      <td>'.$id_client.'</td>
      <td>'.$id_article.'</td>
      <td>'.$quantite.'</td>
      <td>'.$date.'</td> 
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
    margin-left:275px;
    opacity:0.7;
    width:60%;
} 
  
table th{
    background-color:#a33722;
    color:white;
}


table,
td,
th {
    padding: 15px;
    border: 1px solid #1c87c9;
    border-radius: 5px;
    background-color: #e5e5e5;
    text-align: center;
}
    
</style>

</html>