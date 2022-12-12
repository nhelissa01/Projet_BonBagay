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
    <title>Modification Client</title>
</head>

<body>

<?php 
    include '../Header/header.php';
?>

<div class="container">

  <table class="table">
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
      <th scope="col">Operation</th>
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
      <td>
      <button id="modif"><a href="../Modification/modifier_client.php?modifiernumero='.$numero.'">Modifier</a></button>
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