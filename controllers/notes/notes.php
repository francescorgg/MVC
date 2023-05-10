<?php
use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');
//$title = 'My Notes';
//commentiamo la variabile per rifattorizzare tramite la funzione view la presentazione delle viste aggiungendo come
//secondo parametro un metodo di php: "extract". In questo modo fissiamo il bug "Warning: Undefined variable $title"


$config = require base_path("conf.php");
$db = new Database($config['database']);

$notes = $db->query('SELECT * FROM articoli WHERE id_utenti = 1')->fetchAll();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $errors = [];

    if(!Validator::string($_POST['comment'], 1, 1000)){
        $errors['comment'] = "Questo campo deve essere compilato e non deve contenere più di 1000 caratteri";
    }

    if(empty($errors)){
        $db->query("INSERT INTO articoli (articolo, id_utenti) VALUES (:articolo, :id)", ['articolo' => $_POST['comment'], 'id' => 1]);
        header("Refresh:0");
    }

}

view("notes.view.php", ['title' => 'My Notes', 'notes' => $notes]);