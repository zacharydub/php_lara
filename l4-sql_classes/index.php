<?php

require 'functions.php';
require 'Task.php';

//new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'username','password'); //php data objects - interface to connect to DB. We pass it a DSN, which informs which type of DB we are using. Then we pass it the host. Then the databse. Then the credentials. If local only we can just pass 'root' for username and empty string '' for password

$pdo = connectToDb();

//$statement = $pdo->prepare('select * from todos');
//$statement->execute();
//$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');
//var_dump($tasks[0]->foobar());

$tasks = fetchAllTasks();

//var_dump($statement->fetchAll());//this returns an associative array, giving us quasi-duplicates - both keys and indexes. so we can adjust it:
//$results = $statement->fetchAll(PDO::FETCH_OBJ); // fetch the results into a generic object
//$results = $statement->fetchAll(PDO::FETCH_CLASS, 'Task'); // fetch the results into a class called task

require 'index.view.php';
