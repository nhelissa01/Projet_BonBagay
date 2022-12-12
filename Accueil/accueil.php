<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Image/logo.png">
    <title>Accueil_Commercant</title>
</head>

<body>

    <?php 
       include '../Header/header.php';
    ?>

    <div id="tete">

        <section id="image">

        </section>

        <div class="texte">
	       <h1 class="welcome">Bienvenue chez Nhel's Boutique</h1>
        </div>
         
         <!--Contenue de la page-->
         
        <div id="contenue">

	    <div class="gauche">
		  <h1 class="para">Acheter vos articles chez nous</h1>
		  <p> Nhel's Boutique est une entreprise specialisee dans la vente de produits . </p>
          <p>Nous achetons nos produits en gros et les revend a nos clients en gros et en details</p>
		  <p> Ici chez Nhel's Boutique, depuis bientot 5ans sur le terrain, nous nous engagons a donner des produits a de qualite a nos clients.
			Sans oublie que nos produits sont sélectionnés auprès des meilleurs fournisseurs.
            Via notre application web, vous pourrez acheter vos produits en toute securite.</p>
	    </div>

	    <div class="droite">
		  <img class="foto" src="../Image/OIP.jpg">
	   </div>

       </div>

    </div>

    <?php 
       include '../footer/footer.php';
    ?>
     
</body>
      
<style>

body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    width: 100%;
    height: auto;
}

#image{
    background-image: url('../Image/login-background3.jpg');
    background-size: cover; 
    background-repeat: no-repeat;
    width:100%;
    margin: 0;
    padding: 0;
    height:100vh;
    } 

.texte{
    margin-left: -47%;
    padding: 3.5% 45.5% 32.5% 55.5%;
    font-size: 2.5rem;
    color: #AB0000;;
}

.welcome{
    margin-top: -70vh;
    border: 1px solid transparent;
}


#contenue {
    padding: 7.5% 0;
	display: inline-block;
	width: 100%;
    background-color: rgb(246, 246, 246);
    margin-top: -69vh;
}

#contenue *{
    margin-left: 5%;
}

.gauche{
    width: 40%;
    height: auto;
    float: left;
}

.droite{
    width: 40%;
    height: auto;
    float: left;
    padding-right: 5%;
}

.foto{
    width: 95%;
    height: 50vh;
}


</style>

</html>