<?php

$title = 'Note';
$config = (require "conf.php");
$db = new Database($config['database']);


$notes = $db->query('SELECT * FROM articoli WHERE articleid = '.$_GET['articleid'].'')->fetchAll();


require "view/notes.view.php";