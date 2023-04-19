<?php

$title = 'Note';
$config = (require "conf.php");
$db = new Database($config['database']);

$user = 1;

$note = $db->query('SELECT * FROM articoli WHERE articleid = :id', ['id' => $_GET['articleid']])->fetch();

if(!$note){
    abort();
}

if($note['id_utenti'] != $user){
    abort(Response::FORBIDDEN);
}

require "view/note.view.php";