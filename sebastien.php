<!DOCTYPE HTML>
<HTML lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>VIAL Sébastien</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/shyrogan.css">
        <link rel="stylesheet" href="style/circle.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </head>
    <body>
        <!-- La tête sert à présenter de manière général, une première vue. -->
        <div class="presentation">
            <!-- La photo qui devra être centrée -->
            <img src="image/shyrogan.png" alt="OUI C'EST LA PHOTO">
            <!-- Nom/prénom en dessous de la photo -->
            <span class="mdl-typography--display-3">Sébastien VIAL</span>
            <!-- Des icons qui utilisent font-awesome -->
            <div class="social-icons">
                <a target="_blank" href="https://www.facebook.com/sebastien.vial.14" class="fa fa-facebook"></a>
                <a target="_blank" href="https://twitter.com/Shyrogan" class="fa fa-twitter"></a>
                <a target="_blank" href="https://github.com/Shyrogan/" class="fa fa-github"></a>
            </div>
        </div>
        <!-- Les projets -->
        <div class="projets">
            <h1>Quelques projets:</h1>
            <div class="projet-container">
                <div class="discord-card mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Discord L1 Gr. A</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        Le serveur Discord qui réunit les élèves du groupe A dans la bonne humeur et évidemment le travail, on oublie pas le travail... oui oui...
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://discord.gg/NtpzU64rxt" target="_blank">
                            Rejoindre
                        </a>
                    </div>
                </div>
                <div class="petitlien-card mdl-card mdl-shadow--2dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Petitlien</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        Un raccourcisseur de lien très simple mais très pratique qui a été créé en tant que premier projet web.
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="https://petitlien.net" target="_blank">
                            Utiliser
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="competences">
            <h1>Mes compétences:</h1>

            <div class="cercles">
                <div class="c100 p100">
                    <span>Gentil</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <div class="c100 p1">
                    <span>Drôle</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
            </div>
            <div class="cercles">
                <div class="c100 p85 green">
                    <span>Java</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <div class="c100 p75 green">
                    <span>Git</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <div class="c100 p5 green">
                    <span>HTML</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <div class="c100 p5 green">
                    <span>CSS</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bouton qui amène vers le quizz -->
        <a class="quizz" href="quizz.php">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                Petit quizz <i class="material-icons">trending_up</i> ?
            </button>
        </a>
    </body>
</HTML>