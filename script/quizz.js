const nbrQuestions = 4;

function corriger() {
    // Hihi les loupes ressemblent à celle du Java
    // logique, c'est du "Java"Script
    // ah ouais
    for(let i = 1; i <= nbrQuestions; i++) {
        // 200 iq
        // https://stackoverflow.com/questions/35406831/mdl-checkbox-check-from-javascript
        document.querySelector("#answer" + i).MaterialRadio.check();
    }
}