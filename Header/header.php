<link href="../css/header.css" rel="stylesheet" type="text/css"/>

<header>
    <nav id="entete">

        <div id="logo_princ">
          <img class="logo" src="../Image/logo.png">
        </div>

    <ul class="MenuDeroulant">

        <li><a href="../Accueil/accueil.php">Accueil</a></li>

        <li><a href="#">Insertion</a>
            <ul class="sousMenu">
                <li><a href="../Insertion/Insertion_Client.php">Client</a></li>
                <li><a href="../Insertion/Insertion_Article.php">Article</a></li>
                <li><a href="../Insertion/Insertion_Achat.php">Achat</a></li>
            </ul>
        </li>

        <li><a href="#">Modification</a>
            <ul class="sousMenu">
                <li><a href="../Modification/affichage_client.php">Client</a></li>
                <li><a href="../Modification/affichage_article.php">Article</a></li>
                <li><a href="../Modification/affichage_achat.php">Achat</a></li>
            </ul>
        </li>

        <li><a href="#">Consultation</a>
            <ul class="sousMenu">
                <li><a href="../Consultation/consultation_client.php">Client</a></li>
                <li><a href="../Consultation/consultation_article.php">Article</a></li>
                <li><a href="../Consultation/consultation_achat.php">Achat</a></li>
            </ul>
        </li>

    </ul>
    </nav>

</header> 

<style>
  
header{
    position: absolute;
    top: 0;
    left: 0;
    background:#2596be;
    width:100%;
    height: 12vh ;
}

nav{
    width: 100%;
    height: 90%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    width: 100%;
    height: auto;
}


.logo{
    width: 45%;
   height: 9vh;
   margin-left: 40%;
}

/* Menu */
.MenuDeroulant{ 
    position:relative;
    list-style: none;
    padding: 10px;
    margin: 40px; 
     
}

.MenuDeroulant li{ 
    margin-left: -20px;
     float: left; 
    width: 200px;
    color: black;
}

 .MenuDeroulant li a:link, .MenuDeroulant li a:visited{
    display: block;
    color: black;
    padding: 6px 10px;
    border-right: 1px solid #a10a0a;
    text-align: center;
    text-align: none;
    list-style: none;
    font-weight: bold; 
    font-size: 12.5px;
    text-decoration: none;

}

.MenuDeroulant li a:hover {background-color: #a33722;}
.MenuDeroulant li a:active {background-color: #2596be;}

.MenuDeroulant .sousMenu{
    list-style-type: none;
    display: none;
    padding: 0;
    margin: 0; 
    position: absolute; 
}

 .MenuDeroulant .sousMenu li {
    float:none;
    margin: 0;
    padding: 0;
    border-top: 1px solid transparent;
    border-right: 1px solid transparent;
}

.MenuDeroulant .sousMenu li a:link, .MenuDeroulant li a:visited{
    display: block;
    color:black;
    text-decoration: none;
    background-color: #2596be;
}

.MenuDeroulant .sousMenu li a:hover {
    background-color: #a33722;
}

.MenuDeroulant li:hover .sousMenu {
     display: block;
}

</style>