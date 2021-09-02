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
