<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se Connecter</title>
    <link rel="icon" href="Image/logo.png">
    <link rel="stylesheet" type="text/css" href="css/connecter.css">
    <script src="js/sweetalert.min.js"></script>
</head>

<body>
    <header>
     <nav id="entete">

        <div id="logo_princ">
          <img class="logo" src="Image/logo.png">
           <h2> Nhel's Entreprise est la pour vous servir</h2>
        </div>
        
     </nav>
    </header> 

    <?php
    include 'conec.php';
    if(isset($_POST['submit'])){
    $nom = $_POST['nomUtilisateur'];
    $fonction = $_POST['fonction'];              
    
    $sql = "SELECT * FROM CONNEXION where nomUtilisateur = '$nom' AND fonction = '$fonction' ";
    $resul=$baseDonnee->query($sql);
    $resu=$resul->num_rows;
    if($resu> 0){
        $requete = "SELECT * FROM CONNEXION where nomUtilisateur = '$nom' AND fonction = '$fonction' ";
        $result=mysqli_query($baseDonnee,$requete);
        if($result){
          while($row=mysqli_fetch_assoc($result)){
            $nom=$row['nomUtilisateur'];
            $fonction=$row['fonction'];
            $passe=$row['password'];
            ?>         
    <script>
       swal ("","<?php echo "Nom Utilisateur : $nom"?>\r\n<?php echo "Mot de Passe : $passe"?>\r\n<?php echo "Fonction : $fonction"?>", "success");
   </script>

<?php 
    } }
    }else{
?>       
  
    <script>
                  swal ("", "Erreur de Nom d'Utilisateur ou de Fonction !", "warning");
    </script>
<?php   
    }}
?> 

<form method="post">
    <div id="corp">
        
    <div id="principale">
	     <!-- Contenue gauche -->
             
 	<div id="gauche">

 	      <h1>Bienvenue</h1>
 	      <p class="texte">Nous sommes heureux de vous revoir!</p>
          <p class="texte">Saisissez votre nom et votre fonction pour chercher votre mot de passe pour y connecter !</p>
          
          <label>NOM D'UTILISATEUR</label>
          <input type="text" class=case1 name="nomUtilisateur" required/>
          <p></p>

          <label for="case1">FONCTION</label>
          <select name="fonction" class="case">
            <option>Commercant</option>
            <option>Comptable </option>
          </select>		
          <button name="submit">Login</button><br><br>
          <p class="besoin">Vous avez deja un compte? <a class="account" href="connexion.php"> Connectez-vous ! </a></p>
          <p class="besoin">Vous n'avez pas encore de compte d'utilisateur?<a class="account" href="inscription.php"> Inscrivez vous! </a></p>

	</div>

    </div>

    </div>
    </form>

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
    top: 0;
    left: 0;
    background: #2596be;
    width:100%;
    height: 20vh ;
   
}

nav{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;

}


.logo{
    width: 30%;
   height: 8vh;
   margin-left: 128px;
}

#logo_princ{
    margin-left: 420px;
}

#corp{
	  background-image:url('Image/lidl.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
	background-size: cover;
	width: 100%;
	height: 80vh;
}
	
      /* Contenue principale  */

#principale{
	display: flex;
	width: 45%;
	border: 1px transparent;
	background:  white;
    opacity: 0.7;
    padding: 2%;
    top: 23vh;
    position: absolute;
    left: 24.5%;
    font-family: Arial, Helvetica, sans-serif;
    border-radius: 6px;
}


     /* Contenue gauche */
 
#gauche{
	padding-top: 3%;
	height: 63vh;
}

#gauche h1{
	text-align: center;
	margin-top: -1vh;
	font-size: 25px;
	font-weight: bold;
}

.case{
	margin-left: 145px;

}

.case2{
	margin-left: 215px;
	margin-top: 1.2vh;
}

label{
	font-size: 13px;
	color: black;
	font-weight: bold;
}

input{
	padding:  2%  10%;
	background-color:white;
	margin-top: 18px;
	border: 1px solid black;
	border-radius: 5px;
	margin-left: 80px;
}

input:hover{
	outline-color: #1a7297;
}

.password {
    margin-left: 330px;;
	margin-top: 10px;
	font-size: 8px;
	font-weight: bold;
	text-decoration: none;
	color: #1a7297;
}

.password:hover{
	text-decoration: underline;
}

p{
	color: black;
}

.texte{
	font-size: 15px;
	margin-top: 2vh;
}


.password {
	text-decoration: none;
	color: black;
	font-weight: bold;
	font-size: 13px;
	top: 15vh;
}

.password:hover {
	text-decoration: underline;
}

.texte:hover {
    text-decoration: underline;	
}


button{
    background-color: #8c8f998a;
     padding: 2.1% 10.5%;
    color: rgb(87, 12, 12);
    font-weight: bold;
    font-size: 15px;
	border-radius: 5px;
	text-align: center;
	margin-left: 30vh;
	margin-top: 5.5vh;

}

button a{
    text-decoration: none;
    color: white;
}

button:hover{
    background-color: #a33722; 
    color: white;
}  

select{
    padding: 2% 15.7%;
    margin-top: 2vh;
    margin-left: 2.6px;
    border: 1px solid black;
    border-radius: 5px;
} 
select:hover{
    background-color: #313339;
    outline-color: #1a7297;
}

.motDePasse{
    position: absolute;
    margin-top: 30px;
}

.besoin{
	font-size: 13px;
}

.account{
	color: #1a7297;
	text-decoration: none;
	margin-top: -5vh;
}

.account:hover {
	text-decoration: underline;
}
    </style>
</body>

</html>