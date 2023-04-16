<?php

$title = 'My Notes';
$config = (require "conf.php");
$db = new Database($config['database']);

$notes = $db->query('SELECT * FROM articoli WHERE id_utenti = 1')->fetchAll();


require "view/notes.view.php";