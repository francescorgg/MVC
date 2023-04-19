<?php

$title = 'My Notes';
$config = (require "conf.php");
$db = new Database($config['database']);

$notes = $db->query('SELECT * FROM articoli WHERE id_utenti = 1')->fetchAll();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $errors = [];

    if(strlen($_POST['comment']) == 0){
        $errors['comment'] = "Questo campo deve essere compilato";
    }

    if(strlen($_POST['comment']) > 1000){
        $errors['comment'] = "Non puoi scrivere testi maggiori di 1000 caratteri";
    }

    if(empty($errors)){
        $db->query("INSERT INTO articoli (articolo, id_utenti) VALUES (:articolo, :id)", ['articolo' => $_POST['comment'], 'id' => 1]);
        header("Refresh:0");
    }

}

// if(isset($_POST['comment'])){
//     dd('Stai postando!');
// }

require "view/notes.view.php";