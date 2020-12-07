<!DOCTYPE HTML>
<HTML lang="fr">
<head>
    <meta charset="UTF-8">
    <title>QCM</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/quizz.css">
    <script type="text/javascript" src="script/quizz.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>
    <body>
        <!-- Chaque h4 et div créer une question !-->
        <h4>Selon l'INSEE, quel est le pourcentage d'utilisateur cool sur petitlien ?</h4>
        <div class="answers">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="q1-opt-1">
                <input type="radio" id="q1-opt-1" class="mdl-radio__button" name="q1-opt" value="1">
                <span class="mdl-radio__label">5%</span>
            </label>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="q1-opt-2">
                <input type="radio" id="q1-opt-2" class="mdl-radio__button" name="q1-opt" value="2">
                <span class="mdl-radio__label">50%</span>
            </label>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="q1-opt-3" id="answer1">
                <input type="radio" id="q1-opt-3" class="mdl-radio__button" name="q1-opt" value="3">
                <span class="mdl-radio__label">100%</span>
            </label>
        </div>
        
        <h4>Qui sont les auteurs de ce site ?</h4>
        <div class="answers">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="q2-opt-1" id="answer2">
                <input type="radio" id="q2-opt-1" class="mdl-radio__button" name="q2-opt" value="1">
                <span class="mdl-radio__label">Lonis & Sébastien</span>
            </label>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="q2-opt-2">
                <input type="radio" id="q2-opt-2" class="mdl-radio__button" name="q2-opt" value="2">
                <span class="mdl-radio__label">Jon Snow</span>
            </label>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="q2-opt-3">
                <input type="radio" id="q2-opt-3" class="mdl-radio__button" name="q2-opt" value="3">
                <span class="mdl-radio__label">James Bond</span>
            </label>
        </div>

        <h4>Quelle note mérite ce projet ?</h4>
        <div class="answers">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="q3-opt-1">
                <input type="radio" id="q3-opt-1" class="mdl-radio__button" name="q3-opt" value="1">
                <span class="mdl-radio__label">-1/20</span>
            </label>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="q3-opt-2">
                <input type="radio" id="q3-opt-2" class="mdl-radio__button" name="q3-opt" value="2">
                <span class="mdl-radio__label">M'ouais/20</span>
            </label>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="q3-opt-3" id="answer3">
                <input type="radio" id="q3-opt-3" class="mdl-radio__button" name="q3-opt" value="3">
                <span class="mdl-radio__label">20/20</span>
            </label>
        </div>

        <h4>Comment un espagnol exprime-t-il à l'écrit qu'il rigole?</h4>
        <div class="answers">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="q4-opt-1">
                <input type="radio" id="q4-opt-1" class="mdl-radio__button" name="q4-opt" value="1">
                <span class="mdl-radio__label">mort de rire!</span>
            </label>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="q4-opt-2" id="answer4">
                <input type="radio" id="q4-opt-2" class="mdl-radio__button" name="q4-opt" value="2">
                <span class="mdl-radio__label">jajaja</span>
            </label>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="q4-opt-3">
                <input type="radio" id="q4-opt-3" class="mdl-radio__button" name="q4-opt" value="3">
                <span class="mdl-radio__label">בטח לא זה, ובכן זה יהיה מוזר, אני חושב.</span>
            </label>
        </div>

        <!-- Bouton qui amène vers le quizz -->
        <form class="correction" action="javascript:corriger()">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                Le bouton qui lorsqu'on appuie dessus corrige le QCM, merci bouton.
            </button>
        </form>
    </body>
</HTML>