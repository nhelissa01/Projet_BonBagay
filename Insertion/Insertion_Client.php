<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="header.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="../Image/logo.png">
    <title>Insertion CLient</title>
</head>

<?php
    include '../conec.php';
    
    if(isset($_POST['submit'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $adresse=$_POST['adresse'];
    $codePostal=$_POST['codepostal'];
    $ville=$_POST['ville'];
    $pays=$_POST['pays'];
    $telephone=$_POST['telephone'];

    $sql="insert into `clients`(nom,prenom,adresse,codepostal,ville,pays,telephone) values('$nom','$prenom','$adresse','$codePostal','$ville','$pays','$telephone')";
    $result=mysqli_query($baseDonnee,$sql);

    if($result){
        // echo "Connexion reussi";
        header('location:../Consultation/consultation_client.php');
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
            
    <div>
        <section id="image">

        </section>
    </div>
          
   
    <div class="texte">

    <form method="post">
		
	<nav class="formu">
            <fieldset style="background-color: white;" >
            <legend><h1>Formulaire d'enregistrement de Client</h1></legend> 
            
            <div id="principal">

            <div class="gauche">
              <label for="case1">Numero</label>
              <input type="text" name="numero" class="case" disabled />
              <p></p>

              <label for="case1">Nom</label>
              <input type="text" name="nom" class="case" required/>
              <p></p>

              <label for="case1">Prenom</label>
              <input type="text" name="prenom" class="case" required/>
              <p></p>

              <label for="case1">Adresse</label>
              <input type="text" name="adresse" class="case" minlength="2" required/>
              <p></p>
            </div>

            <div class="droite">    
               <label for="case1">Code Postal</label>
               <input type="texte"  name="codepostal" class="case" required/>
               <p></p>

               <label for="case1">Ville</label>
               <input type="text" name="ville" class="case" required/>
               <p></p>

               <label for="case1">Pays</label>
               <input type="text" name="pays" class="case" required/>
               <p></p>


              <label for="case1">Telephone</label>
              <input type="texte" name="telephone" class="case" required/>
              <p></p>
            </div>

            </div>

            <div id="bouton">
                <button name="submit" id="valider">Valider</button>
            </div>
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

header{
    position: absolute;
    top: 0;
    left: 0;
    background:#2596be;
    width:100%;
    height: 16vh ;
   
}

nav{
    width: 100%;
    height: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;


}

#tete{
    width: 100%;
    height: auto;
   
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
    margin: 0;
    padding: 0;
    height:100vh;
    } 

.texte  {
    margin-left: 250px;
    margin-top: -650px;
}

    /* Formulaire */
#principal{
    width: 730px;
    height: 52vh;
    display: flex;
}
    
input{
    padding: 3% 20%;
    margin-top: 2vh;
    border: 1px solid black;
    border-radius: 5px;
}

input:hover{
    outline-color: #1a7297;
}
    
label{        
	font-size: 14px; 
	font-weight: bold; 
	color: black; 
 } 

 fieldset{
    height: 73vh;
    margin-top: 23.5vh;
    opacity: 0.7;
 }
   
.gauche{
    margin-top: 6vh;
    margin-left: 20px; 
}

.droite{
    margin-top: 6vh;
	margin-left: 25%;
}

button{
	margin-top: 4vh;
    width: 15%;
    background-color: #8c8f99;
    padding: 1.1% 1.5%;
    color: #a33722;
    font-weight: bold;
    font-size: 18px;
    border-radius: 9px;
    margin-left: 300px
}

button:hover{
    background-color: #a33722;
    color:white;
}

</style>

</html>