<?php

$title = 'Note';
$config = (require "conf.php");
$db = new Database($config['database']);

$user = 1;

$notes = $db->query('SELECT * FROM articoli WHERE articleid = :id', ['id' => $_GET['articleid']])->fetchAll();

if(!$notes){
    abort();
}

if($notes[0]['id_utenti'] != $user){
    abort(Response::FORBIDDEN);
}

require "view/notes.view.php";