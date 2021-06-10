<!DOCTYPE html>
<html lang="fr">



<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="/Css/Accueil.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <form action="formulaireGET.php" method="get">
</head>


<header>
<a href="#"><img class="Mentoreelogo" src="/Img/Mentoree.svg"
                alt="Mentoree logo"></a>
        <input class="searchbar" type="text" placeholder="Employeur, poste, pays ...">
        <div class="nav">
        <a class="button" href="#" title="Accueil"><text class="accueil">🏠 Accueil</text></a>
        <a class="button" href="#" title="Connect" data-toggle="modal" data-target="#modalContact"
            onclick="">  
       <img class="accueillogo" src="/Img/Asset-logo-mentoree-V2 14.png" >
        <text class="connexion">S'inscrire</text></a>
    </div>
</header>

<div class="modal " id="modalContact" tabindex="-1" role="dialog" data-backdrop="static"
     aria-labelledby="modalContactabel" aria-hidden="false" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalContactLabel">Inscription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--***************FORMULAIRE DE CONTACT ******************-->
                <form id="login-form">
                    <input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username">
                    <input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
                    <input type="submit" value="Login" id="login-form-submit">
                  </form>
                <!--***************FIN FORMULAIRE DE CONTACT ******************-->

            </div>
        </div>
    </div>
</div>


<body>
    <div class="Intro">
        <span>Un</span>
        <span style="color: #5890C2;">recrutement</span>
        <span>des</span>
        <span style="color: #55B384;">professionels débutants</span>
        <br>
        <span>plus</span>
        <span style="color: #E3C140;">inclusif et innovant</span>
        <span>à l'aide de</span>
        <span style="color: #D16860;">mentorat</span>
    </div>

    <div class="container">
        <div class="box1">
            <img class="Mentor" src="/Img/LogoMentor.png" alt="image mentor">
            <a href='Mentor.php'> Mentor</a>
            <p>• souhaite enseigner,<br> recruter, ou réseauter<br> • confirmé bienveillant et<br> impartial (5+ ans
                d’expérience)</p>
        </div>
        <div class="box2">
            <img class="Mentoré" src="/Img/LogoMentoré.png" alt="image mentoré">
            <a href='Mentore.php'> Mentoré</a>
            <p>• souhaite apprendre,<br> s’orienter, ou se reconvertir<br> • débutant, ou étudiant du<br> supérieur (0-5
                ans d’expérience)</p>
        </div>
        <div class="box3">
            <img class="Entreprise" src="/Img/Group 293.png" alt="image entreprise">
            <a href='Entreprise.php'>Entreprise</a>
            <p>• souhaite s'engager pour<br> un recrutement à impact<br> • startup, PME, ou grand<br> groupe innovant
            </p>
        </div>
    </div>
</body>

<footer>
    <a href="#"><img src="/Img/linkedin.svg" alt="Linkedin logo"></a>
    <a href="#"><img src="/Img/instagram.png" alt="Instagram logo"></a>
    <a href="#"><img src="/Img/facebook.png" alt="facebook logo"></a>
    <a href="#"><img src="/Img/tiktok.png" alt="tiktok logo"></a>
    <a href="#"><img src="/Img/discord.png" alt="discord logo"></a>
    <p>team@mentoree.fr | À propos | © Copyright 2021 - Tous droits réservés</p>
</footer>



<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"
        integrity="sha256-BDmtN+79VRrkfamzD16UnAoJP8zMitAz093tvZATdiE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/node_modules/wow.js/dist/wow.min.js"></script>
<script src="assets/js/node_modules/waypoints/src/waypoint.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/side-scripts.js"></script>
<script src="assets/js/scripts.js"></script>


<script type="text/javascript">
    $(window).on('load', function() {
        $('#modalContact').modal('show');
    });</script>