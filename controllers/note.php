<?php

$title = 'Note';
$config = (require "conf.php");
$db = new Database($config['database']);


$notes = $db->query('SELECT * FROM articoli WHERE id_utenti = :id_utente AND articleid = :id', ['id_utente' => 1, 'id' => $_GET['articleid']])->fetchAll();

if(!$notes){
    abort();
}

require "view/notes.view.php";