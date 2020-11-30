<?php
if(isset($_POST['url']) && !empty($_POST['url'])) {
    $url = $_POST['url'];
    # Lis le fichier
    $file_path = 'shortened/stats.json';
    $json_raw  = file_get_contents($file_path);

    # On augmente le nombre de visiteur
    $json                = json_decode($json_raw);
    $json->shortenedUrls = $json->shortenedUrls+1;

    $id                  = $json->shortenedUrls;

    if(!file_put_contents('shortened/' . $id . '.json', json_encode(array("url" => $url)))) {
        echo "Oula... ce n'est pas normal...";
    } else {
        # On augmente l'id
        file_put_contents($file_path, json_encode($json));
        echo "C'est fait! Disponible avec petitlien.net?q=" . $id;
    }
} else {
    echo "Oula... Il faut une URL monsieur... pitié...";
}