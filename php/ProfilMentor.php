<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Css/ProfilMentor.css">


    <header>
        <a href="#"><img class="Mentoreelogo" src="/Img/Mentoree.svg"
                alt="Mentoree logo"></a>
        <input class="searchbar" type="text" placeholder="Employeur, poste, pays ...">
        <div class="nav">
            <a class="button" href="Accueil.php" title="Accueil"><text class="accueil">🏠 Accueil</text></a>
            <a class="button" href="#" title="Connect"><img class="accueillogo"
                    src="/Img/Asset-logo-mentoree-V2 14.png"><text
                    class="connexion">S'inscrire</text></a>
        </div>
    </header>
</head>

<body>
    <div class="profil">
        <div class="recrutement">
            <text class="Recrutement">Pour un recrutement plus inclusif et innovant</text>
            <button class="entreprise">+ Créer une page entreprise</button>
        </div>
        <div class="Mentorat">
            <text class="mentorat">Supervise un programme de mentorat</text>
            <button class="mentorez">+ Ajouter un mentoré</button>
        </div>
        <div class="Mode">
            <text class="mode">Choisis un mode</text>
        </div>
        <div class="conseil">
            <input type="text" class="Conseil"
                placeholder="ex : Apprendre à mieux se connaître pour identifier les bonnes opportunités de carrière et acquérir des compétences transposables pour gagner en sécurité d'emploi">
            <text class="conseil2">Ton conseil principal pour réussir sa carrière <br>(175 caractères)</text>
        </div>
        <div class="position">
            <input type="text" class="Position" placeholder="Position">
            <input type="text" class='Employeur' placeholder="Employeur">
        </div>
        <div class="name">
            <input class="Prenom" type="text" placeholder="Prénom">
            <input class="Nom" type="text" placeholder="Nom">
        </div>
        <div class="profilpic">

        </div>
    </div>
    <div class="droite">
        <text class="parametre">Choisis un paramètre de visibilité pour tes retours d’expérience complétés</text>
        <div class="bouton">
            <input type="radio" class="public" id="Public" name="public" value="publicYes">
            <label for="public">Rendre public</label><br>
            <input type="radio" id="Prive" id="Public" name="Prive" value="PriveYes">
            <label for="Prive">Rendre privé</label><br>
        </div>
        <text class="entretien">Décris comment tu as réussi un entretien d'embauche difficile</text>
        <div class="blocs">
            <text class="employeur">Employeur</text>
            <text class="Poste">Titre du poste détenu</text>
            <text class="Pays">Pays</text>
            <text class="Année">Année</text>
            <input class="area1" type="text" placeholder="ex: Google">
            <input class="area2" type="text" placeholder="ex: Analyste">
            <input class="area3" type="text" placeholder="ex: France">
            <select class="area4" id="year" name="year">
                <option>Ex: 2019</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </select>
            <div class="ProfilCard">
                <div class="box1">
                    <text class="Textbox1">Comment décrocher un poste similaire</text>
                    <button class="Modifier"><text class="modif">Modifier</text></button>
                </div>
                <div class="box2">
                    <text class="Textbox2">Principales choses à faire et ne pas faire</text>
                    <button class="Modifier2"><text class="modif">Modifier</text></button>
                </div>
                <div class="box3">
                    <Text class="Textbox3">Éducation et expérience de travail</Text>
                    <button class="Modifier3"><text class="modif">Modifier</text></button>
                </div>
                <div class="box4">
                    <text class="Textbox4">Questions d’entretien et témoignages</text>
                    <button class="Modifier4"><text class="modif">Modifier</text></button>
                </div>
            </div>
        </div>
    </div>
    <div class="tableau">
        <text class="Tableau">Tableau de bord</text>
        <div class="Stats">
            <text class="Vues">200<br>Vues</text>
            <text class="Fans">30<br>Fans</text>
            <text class="Fav">8<br>Favoris</text>
        </div>
        <div class="profillvl">
            <text class="Lvl">Niveau du profil</text>
        </div>
        <text class="Etapeconseil">Prochaines étapes conseillées</text>
        <div class="Etapes">

            <div class="box5">
                <text class="textbox5">Compléte ton retour d’expérience sur<br>comment être embauché chez Google</text>
            </div>
            <div class="box6">
                <text class="textbox6">Articule ton objectif de carrière et décris ta<br> personnalité pour un CV plus
                    humain !</text>
            </div>
            <div class="box7">
                <text class="textbox7">Crée une page entreprise pour y publier<br> une offre d’emploi</text>
            </div>
        </div>
        <div class="Mentores">
            <text class="Mentor1">Mentorés (1)</text>
            <div class="boxmentor">
                <text class="arthur">Arthur<br>Fans (3) </text>
            </div>
        </div>
        <div class="Page">
            <text class="Mentor2">Mentors (1)</text>
            <div class="Barbara">
                <text class="barbara">Barbara<br>Fans (67)</text>
            </div>
        </div>
    </div>
    <div class="footer">
        <a href="#"><img src="/Img/linkedin.svg" alt="Linkedin logo"></a>
        <a href="#"><img src="/Img/instagram.png" alt="Instagram logo"></a>
        <a href="#"><img src="/Img/facebook.png" alt="facebook logo"></a>
        <a href="#"><img src="/Img/tiktok.png" alt="tiktok logo"></a>
        <a href="#"><img src="/Img/discord.png" alt="discord logo"></a>
        <p>© Copyright 2021 - Tous droits réservés</p>
        <text class="langue">FR EN</text>
    </div>
    <div class="footer2">
        <p><text class="content">team@mentoree.fr • (+33) 6 66 40 46 42 • Puteaux, France <br><br>
                Confidentialité • Conditions d’utilisation • Mentions légales</text></p>
        <text class="propos">À propos</text>
        <text class="vous">Vous êtes</text>
        <div class="logo">
            <div class="logo1">
                <img class="cible" src="/Img/🎯.png">
                <text class="mission">Notre mission</text>
            </div>
            <div class="logo2">
                <img class="bulle" src="/Img/💬.png">
                <text class="Contact">Nous contacter</text>
            </div>
            <div class="logo3">
                <img class="point" src="/Img/❔.png">
                <text class="FAQ">FAQ</text>
            </div>
            <div class="logo4">
                <img class="mains" src="/Img/🙏.png">
                <text class="Aide">Nous aider</text>
            </div>

        </div>
        <div class="vous2">
            <div class="vous3">
            <img class="Mentor" src="/Img/Mentor.png">
            <a class="mentor" href='Mentor.php'>Mentor</text>
            </div>
            <div class="vous4">
            <img class="Mentore" src="/Img/Mentoré.png">
            <a class="mentore" href='Mentore.php'>Mentoré</text>
            </div>
            <div class="vous5">
            <img class="Entreprise" src="/Img/Entreprise.png">
            <a class="entreprises" href='Entreprise.php' >Entreprise</text>

            </div>
        </div>
    </div>
</body>

</html>
</body>

</html>