<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="header.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="../Image/logo.png">
    <title>Insertion Achat</title>
</head>

<?php
   include '../conec.php';

if(isset($_POST['submit'])){
    $id_client=$_POST['id_client'];
    $id_article=$_POST['id_article'];
    $quantite=$_POST['quantite'];
    $date=$_POST['date'];
   

    $sql="insert into `achats`(id_client,id_article,quantite,date) values('$id_client','$id_article','$quantite','$date')";
    $result=mysqli_query($baseDonnee,$sql);

    if($result){
        // echo "Connexion reussi";
        header('location:../Consultation/consultation_achat.php');
    }else{
        die(mysqli_error($baseDonnee));
    }
}
?>

<body>

    <?php 
       include '../Header/header.php';
    ?>

    <div id="tete">
       <section id="image">

       </section>
    </div>
   
    <div class="texte">
    <form method="post">
		
	<nav class="formu">
        <fieldset style="background-color: white; " >
        <legend><h1>Formulaire d'enregistrement d'achat</h1></legend> 
            
        <div id="principal">

        <div class="gauche">
        <label for="case1">Id Achat</label>
        <input type="text" name="id_achat" class="case" disabled />
        <p></p>

        <label for="case1">Id Client</label>
        <input type="text" name="id_client" class="case" required/>
        <p></p>

        <label for="case1">Id Article</label>
        <input type="text" name="id_article" class="case" required/>
        <p></p>

        <label for="case1">Quantite</label>
        <input type="text" name="quantite" class="case" minlength="2" required/>
        <p></p>

       <label for="case1">Date</label>
       <input type="date" name="date" class="inputDate" required/>
       <p></p>

       <div id="bouton">
        <button name="submit" id="valider">Valider</button>
       </div>

       </div>
       </div>
       </fieldset>
 
    </nav>

    </form>
  
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

.formu{
    position:absolute;
    margin-top:65px;
}

#tete{
    width: 100%;
    height: auto;
   
}

#principal{
    width: 600px;
    height: 52vh;
    display: flex;
}


.gauche{
     margin-top:24px;
}

input{
    padding: 2% 20%;
    margin-left:180px;
    margin-top: -9vh;
    border: 1px solid black;
    border-radius: 5px;
} 

.inputDate{
    padding:2% 25.5%;
}

input:hover{
    outline-color: #1a7297;
}

legend h1{
    font-size:20px;
}

label{ 
    margin-top: 15vh; 
    margin-left:50px;  
    margin:40px;
	font-size: 14px;  
	font-weight: bold; 
	color: black;
     
 } 

 fieldset{
    margin:315px;
    height: 70vh;
    margin-top: 52vh;
    opacity: 0.7;
 }
   

button{
	margin-top: 7vh;
    width: 25%;
    background-color: #8c8f99;
    padding: 1.1% 1.5%;
    color: rgb(170, 22, 22);
    font-weight: bold;
    font-size: 18px;
    border-radius: 9px;
    margin-left: 220px
}
button:hover{
    background-color: #a33722;
    color:white;

}
</style>

</html>