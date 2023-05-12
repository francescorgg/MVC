<?php

use Core\Database;
use Core\Response;


$config = require base_path("conf.php");
$db = new Database($config['database']);


$user = 1;
    
$note = $db->query('SELECT * FROM articoli WHERE articleid = :id', ['id' => $_POST['articleid']])->fetch();

if(!$note){
    abort();
}

if($note['id_utenti'] != $user){
    abort(Response::FORBIDDEN);
}



$db->query('DELETE FROM articoli WHERE articleid = :id', ['id' => $_POST['articleid']]);

header('location: /notes');
exit;



        