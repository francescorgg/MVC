<?php

use Core\Database;
use Core\Response;
//$title = 'Note';
//commentiamo la variabile per rifattorizzare tramite la funzione view la presentazione delle viste aggiungendo come
//secondo parametro un metodo di php: "extract". In questo modo fissiamo il bug "Warning: Undefined variable $title"


$config = require base_path("conf.php");
$db = new Database($config['database']);

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if($note['id_utenti'] != $user){
        abort(Response::FORBIDDEN);
    }

    $db->query('DELETE FROM articoli WHERE articleid = :id', ['id' => $_GET['articleid']]);

    header('location: /notes');
    exit;

} 

    $user = 1;
    
    $note = $db->query('SELECT * FROM articoli WHERE articleid = :id', ['id' => $_GET['articleid']])->fetch();
    
    if(!$note){
        abort();
    }
    
    if($note['id_utenti'] != $user){
        abort(Response::FORBIDDEN);
    }
        
    view("note.view.php", ['title' => 'Note', 'note' => $note]);


