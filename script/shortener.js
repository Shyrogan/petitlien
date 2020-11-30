let visitor_count = 0;
let shortened_count = 0;

/**
 * https://www.creativejuiz.fr/blog/javascript/recuperer-parametres-get-url-javascript
 */
function $_GET(param) {
    const vars = {};
    window.location.href.replace( location.hash, '' ).replace(
        /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
        function( m, key, value ) { // callback
            vars[key] = value !== undefined ? value : '';
        }
    );

    if ( param ) {
        return vars[param] ? vars[param] : null;
    }
    return vars;
}

/**
 * Ajoute l'URL.
 */
function ajouterUrl() {
    let url = document.getElementById("urlField").value;
    $.ajax({
        url: "api/add_url.php",
        type: "post",
        data: {url: url},
        success: function (r) {
            afficherInfo(r)
        }
    })
}

/**
 * Récupère "q" qui est le "identifiant" vers notre lien et redirige.
 */
const q = $_GET('q');
if(q != null) {
    $.ajax({
        url: "api/redirect.php",
        type: "post",
        data: {id: q},
        success: function (r) {
            window.location.replace(r);
        }
    })
} else {
    $.ajax({
        url: "api/stats.php",
        type: "get",
        success: function (r) {
            let json = JSON.parse(r);
            visitor_count = json['visitors'];
            shortened_count = json['shortenedUrls'];

            document.getElementById("url_shortened").innerHTML = shortened_count;
            document.getElementById("visitors").innerHTML = visitor_count;
        }
    })
}