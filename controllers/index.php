<?php

//$title = 'Home';
//commentiamo la variabile per rifattorizzare tramite la funzione view la presentazione delle viste aggiungendo come
//secondo parametro un metodo di php: "extract". In questo modo fissiamo il bug "Warning: Undefined variable $title"

view("index.view.php", ['title' => 'Home']);