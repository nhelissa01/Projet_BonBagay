<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Inser_article.css">
    <link rel="icon" href="../Image/logo.png">
    <title>Insertion Article</title>
</head>

<?php
    include '../conec.php';

    if(isset($_POST['submit'])){
    $nom=$_POST['nom'];
    $description=$_POST['description'];
    $prix=$_POST['prix'];  

    $sql="insert into `articles`(nom,description,prix) values('$nom','$description','$prix')";
    $result=mysqli_query($baseDonnee,$sql);

    if($result){
        // echo "Connexion reussi";
        header('location:../Consultation/consultation_article.php');
    }else{
        die(mysqli_error($baseDonnee));
    }
    }
?>

<body>
    <?php 
      include '../Header/header.php';
    ?>

<div>
     <div>
        <section id="image">

        </section>
     </div>

<div class="texte">

<form method="post">

<nav class="formu">

<fieldset style="background-color: white; ">
<legend><h1>Formulaire d'enregistrement d'article</h1></legend> 

  <div class="form-group">
    <label for="reference">Reference</label>
    <input type="text" class="form-control1"  name="reference" disabled >
  </div>

  <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control"  name="nom" required/>
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control2" name="description" required/>
  </div>

  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="number" class="form-control"  name="prix" min=1 required/>
  </div>

  <button name="submit" class="btn btn-primary">Submit</button>

</fieldset>
 
 </nav>
</form>

</div>
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
}

nav{
    width: 100%;
    height: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;

}

header{
    position: absolute;
    top: 0;
    left: 0;
    background:#2596be;
    width:100%;
    height: 16vh ;
   
}

fieldset{
    width:65%;
    height: 67vh;
    margin-top: -83vh;
    opacity: 0.7;
}

#image{
    background-image: url('../Image/lidl.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
   	background-size: cover;
	  width: 100%;
	  /* height: 80vh; */
    margin: 0;
    padding: 0;
    height:100vh;
    } 


    
input{
    padding: 2% 12%;
    margin-top: 2vh;
    border: 1px solid black;
    border-radius: 5px;
} 

input:hover{
    outline-color: #1a7297;
}
    

label{ 
     
    margin:40px;
	  font-size: 14px; 
	  font-weight: bold; 
	  color: black;  
} 

  
button{
  	margin-top: 3vh;
    width: 21%;
    background-color: #8c8f99;
    padding: 1.1% 1.5%;
    color: #a33722;
    font-weight: bold;
    font-size: 18px;
    border-radius: 9px;
    margin-left: 220px
}

button:hover{
    background-color: #a33722;
    color:white;
}

.texte  {
    margin-left: 350px;
}

.form-control1{
    margin-left: 50px;
}

.form-control{
    margin-left: 90px;

}
.form-control2{
    margin-left: 42px;
}
.form-group{
    margin-bottom:18px;
}

</style>

</html>