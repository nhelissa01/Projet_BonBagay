<link href="../css/header_compt.css" rel="stylesheet" type="text/css"/>

<header>
    <nav id="entete">

        <div id="logo_princ">
        <img class="logo" src="../Image/logo.png">
        </div>

     <ul class="MenuDeroulant">

        <li><a href="../Accueil/accueil_comptable.php">Accueil</a></li>
        <li><a href="../Consultation/consultation_client_compt.php">Consultation_client</a></li>
        <li><a href="../Consultation/consultation_article_compt.php">Consultation_article</a></li>
        <li><a href="../Consultation/consultation_achat_compt.php">Consultation_achat</a></li>

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
    position: fixed;
}

nav{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;

}

body{
    margin: 0;
    padding: 0;
    font:12px Arial;
    box-sizing: border-box;
    width: 100%;
    height: auto;
}



.logo{
    width: 40%;
   height: 10vh;
   margin-left: 40%;
}

/* Menu */
.MenuDeroulant{ 
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

.MenuDeroulant li a:visited{
    display: block;
    color:black;
    text-decoration: none;
    background-color: #2596be;
}

.MenuDeroulant li a:hover {
    background-color: #a33722;
}

.MenuDeroulant li:hover  {
     display: block;
}

</style>