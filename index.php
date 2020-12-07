<!DOCTYPE HTML>
<HTML lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Petit lien</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <link rel="stylesheet" href="style/style.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="script/design_animations.js"></script>
        <script type="text/javascript" src="script/shortener.js"></script>
    </head>
    <body>
        <div class="main">
            <form action="#">
                <h1>petitlien</h1>
            </form>
            <div class="url">
                <form action="javascript:ajouterUrl()">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label url-bar">
                        <input class="mdl-textfield__input" maxlength="150"
                               type="text"
                               pattern="(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})"
                               id="urlField">
                        <label class="mdl-textfield__label" for="urlField">Lien à raccourcir</label>
                        <span class="mdl-textfield__error">Oula, il semblerait que ce ne soit pas un lien...</span>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                        <i class="material-icons">arrow_right_alt</i>
                    </button>
                </form>
            </div>
            <div class="info">
                <i class="material-icons">info</i>
                <p id="message">Oula, ça c'est bizarre...</p>
            </div>
        </div>
        <div class="stats">
            <div class="stat-container">
                <h1 id="url_shortened">0</h1>
                <p>URL raccourcis</p>
            </div>
            <div class="stat-container">
                <h1 id="visitors">0</h1>
                <p>Visites sur petitlien</p>
            </div>

            <div class="stat-container">
                <h1>100%</h1>
                <p>Le taux des visiteurs cool (INSEE)</p>
            </div>
        </div>
        <div class="cv">
            <h2>Curriculum vitæ</h2>
            <p>(cliquez sur les cartes pour y accéder)</p>
            <div class="authors">
                <a class="author" href="sebastien.php">
                    <img src="image/shyrogan.png" alt="AAAAA">
                    <h2>Sébastien VIAL</h2>
                    <p>sebastien.vial@etu.umontpellier.fr</p>
                </a>
                <a class="author" href="lonis.html">
                    <img src="image/lonis.png" alt="AAAAA">
                    <h2>Lonis KADRI-AGULLO</h2>
                    <p>lonis.kadri-agullo@etu.umontpellier.fr</p>
                </a>
            </div>
        </div>
    </body>
</HTML>