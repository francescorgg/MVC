<?php
use Core\App;
use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');
//$title = 'My Notes';
//commentiamo la variabile per rifattorizzare tramite la funzione view la presentazione delle viste aggiungendo come
//secondo parametro un metodo di php: "extract". In questo modo fissiamo il bug "Warning: Undefined variable $title"


$config = require base_path("conf.php");
//$db = new Database($config['database']);
$db = App::resolve(Database::class);

$notes = $db->query('SELECT * FROM articoli WHERE id_utenti = 1')->fetchAll();

view("notes.view.php", ['title' => 'My Notes', 'notes' => $notes]);