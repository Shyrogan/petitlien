<?php
if(isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $content = file_get_contents('shortened/' . $id . '.json');
    if (!$content) echo 'unknown.html';
    else echo json_decode($content)->url;
}