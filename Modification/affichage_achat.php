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
    <title>Modification Achat</title>
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
      <th scope="col">Operation</th>
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
     <td scope="row">'.$id_achat.'</th\d>
     <td>'.$id_client.'</td>
     <td>'.$id_article.'</td>
     <td>'.$quantite.'</td>
     <td>'.$date.'</td>
     <td>
       <button id="modif"><a href="../Modification/modifier_achat.php?modifierid_achat='.$id_achat.'">Modifier</a></button>
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
    margin-top:165px;
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