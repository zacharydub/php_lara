<?php

$greeting = 'hello world require';

$names = [
'zach',
'zach2',
'zach3'
];

//foreach ($names as $name){
//  echo $name . ', ';
//}

$animals = [
  'dog',
  'cat',
  'monkey',
  'cow',
  'sheep'
];
////pushing to regular array
$animals[]='new animal';


////associative array
$person = [
  'age' => 31,
  'hair' => 'brown',
  'career' => 'web developer',
];
////pushing to associative array
$person['name']='zach';

////printing value from (associative) array
//echo $person['age']; // 31

////print array contents
var_dump($person);

//echo '<pre>';
//var_dump($person);
//echo '</pre>';

//die(var_dump($person));

////remove contents from array
unset($person['age']);
var_dump($person);

$task = [
'title' => 'some task',
'due date' => 'tomorrow',
'assigned to' => 'me',
'completed' => true
];
echo '<pre>';
var_dump($task);
echo '</pre>';

//require 'index.view.php';
require 'task.view.php';
