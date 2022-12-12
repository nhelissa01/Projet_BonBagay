<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>S'inscrire</title>
	<link rel="stylesheet" type="text/css" href="s'inscrire.css">
	<link rel="icon" href="Image/logo.png">
	
</head>

<?php
  include 'conec.php';

    if(isset($_POST['submit'])){
    $nomUtilisateur=$_POST['nomUtilisateur'];
    $fonction=$_POST['fonction'];
    $password=$_POST['password'];

    $sql="insert into `connexion`(nomUtilisateur,fonction,password) values('$nomUtilisateur','$fonction','$password')";
    $result=mysqli_query($baseDonnee,$sql);

    if($result){
        // echo "Connexion reussi";
        header('location:connexion.php');
    }else{
        die(mysqli_error($baseDonnee));
    }
}
?>

     <!-- Corps de la page -->
<body>
<div id="corp">

 <div id="principale">

 	<div id="formulaire">
	 <form method="post">

    	<h1>Creer votre compte</h1>

		<div id="container">
        <label>NOM D'UTILISATEUR</label>
	    <input type="text" class=case1 name="nomUtilisateur" required/>
        <p></p>

        <label for="case1">FONCTION</label>
        <select name="fonction" class="case">
            <option>Commercant</option>
            <option>Comptable </option>
        </select>
        <p></p>

	    <label class="motDePasse">MOT DE PASSE</label><br>
        <input type="password" name="password" class=case2 required/><br>
        <p></p>

		<button name="submit">Enregistrer</button><br><br>
		</div>

		<div id="message">
		  <a class="account" href="connexion.php">Vous avez deja un compte? Connectez-vous </a>
	 	  <p id="text">En vous inscrivant, vous acceptez l'equipe de service et de confidentialite de la Boutique</p>
        </div>

     </form>
	</div>

 </div>

</div>
</body>

<style>

body{
	margin: 0;
	padding: 0;
    box-sizing: border-box;
    width: 100%;
    color: white;
    font-weight: inherit;
    font-style: inherit;
    font-family: inherit;
    font-size: 100%;
    vertical-align: baseline;
}
 
     /* image en background */

#corp{
    background-image: url('./Image/lidl.jpg');
	background-size: cover;
	width: 100%;
	height: 100vh;
	top: 0;
}

       /* Contenue principale  */

#principale{
	width: 33%;
	height: 90.9vh;
	border: 1px transparent;
	background:  white;
	opacity: 0.7;
    padding: 2%;
    top: 0vh;
    position: absolute;
    left: 30%;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
}

#container{
	margin-top: 7vh;
}

h1{
	font-size: 25px;
    text-align: center;
    margin-top: 3.5vh;
	color:black;
}

input{
	padding: 3% 30%;
	margin-top: 2vh;
	border: 1px solid black;
	border-radius: 5px;
}

input:hover{
	outline-color: #1a7297;
}

label{
	font-size: 12px;
	font-weight: bold;
	color: black;
}

.texte{
	font-size: 16px;
}


select{
	border: 1px solid black;
	margin: 8px;
	color: black;
	padding: 3% 37%;
	border-radius: 5px;
} 


#message{
    margin-top:25px;
}

.account{
	color: #1a7297;
	margin-top: 3vh;
	font-size: 13px;
	font-weight: bold;
}

.account:hover{
    text-decoration: underline;
}

button{
	margin-top: 10vh;
    margin-left:140px;
    background-color: #8c8f998a;
    padding: 10px 25px;
    color: rgb(87, 12, 12);
    font-weight: bold;
    font-size: 18px;
	border-radius: 10px;
}

button:hover{
	background-color: #a33722; 
        color: white;

}

#text{
	font-size: 12px;
	color: black;
	font-weight: bold;
}

a{
	color: #1a7297;
	text-decoration: none;
}


</style>
</html>