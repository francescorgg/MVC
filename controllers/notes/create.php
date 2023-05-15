<?php
use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$config = require base_path("conf.php");
$db = new Database($config['database']);

$notes = $db->query('SELECT * FROM articoli WHERE id_utenti = 1')->fetchAll();

$errors = [];

if(!Validator::string($_POST['comment'], 1, 1000)){
    $errors['comment'] = "Questo campo deve essere compilato e non deve contenere più di 1000 caratteri";
}

if(empty($errors)){
    $db->query("INSERT INTO articoli (articolo, id_utenti) VALUES (:articolo, :id)", ['articolo' => $_POST['comment'], 'id' => 1]);
    header("Refresh:0");
}



view("notes.view.php", ['title' => 'My Notes', 'notes' => $notes]);