<?php

function dd($array){

  echo '<pre>';
  die(var_dump($array));
  echo '</pre>';

}

function nightclubEntrance($age){
  //if($age > 20){
  //  echo 'enter';
  //} else{
  //  echo 'denied';
  //}
  return $age > 20 ? true : false;
}

function connectToDb()
{
//try{
//  return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root','');
//} catch(PDOException $e){ //this e variable is an object, an instance of the PDOException class.
//    //die('could not connect');
//    die($e->getMessage());
//}
}

function fetchAllTasks($pdo)
{
  $statement = $pdo->prepare('select * from todos');

  $statement->execute();

  return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
}
