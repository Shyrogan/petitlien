<?php
# Lis le fichier
$file_path = 'shortened/stats.json';
$json_raw = file_get_contents($file_path);

# On augmente le nombre de visiteur
$json     = json_decode($json_raw);
$json -> visitors = $json -> visitors + 1;

# Réécris le fichier des stats pour les mettres à jour.
$json_raw = json_encode($json);
file_put_contents($file_path, $json_raw);
echo $json_raw;
