const colors = ["pink", "red", "orange", "green", "magenta", "blue"];
let currentIndex = 0;

setInterval(function() {
    document.querySelector("h1").style.cssText = "color: " + colors[currentIndex];
    currentIndex++;
    if (currentIndex === undefined || currentIndex >= colors.length) {
        currentIndex = 0;
    }
}, 1000);

function afficherInfo(text) {
    let p = document.getElementById("message");
    p.innerHTML = text;

    let opacity = 0;
    let style = document.querySelector(".main").querySelector(".info").style
    style.cssText = "";

    let interval = setInterval(function () {
        let color = "";
        if(text.startsWith("Oula")) {
            color = "color: red";
        }
        style.cssText = "opacity: " + opacity + "%;" + color;
        opacity += 1;
        if(opacity >= 100) {
            clearInterval(interval);
        }
    }, 10)
}