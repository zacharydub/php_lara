<?php


require 'functions.php';

class Task{

  public $description;

  //protected $completed = false;
  public $completed = false;


  public function __construct($description)
  {
    $this->description = $description;
  }

  public function isComplete()
  {
    return $this->completed;
  }

  public function complete()
  {
    $this->completed = true;
  }

}

$task = new Task ('Go to the store');

//var_dump($task);
//dd($task);

var_dump($task->isComplete()); // false

$task->complete();

var_dump($task->isComplete()); // true

$tasks = [
  new Task('go to store'),
  new Task('finish screencast'),
  new Task('clean room')
];

//dd($tasks);

$tasks[0]->complete();


require 'index.view.php';
