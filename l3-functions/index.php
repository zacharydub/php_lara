<?php

$animals = ['dog','cat'];

require 'functions.php';

//dumper('hello','big','world');

//dd(['dog','cat','mouse']);

//nightclubEntrance(20);
if(nightclubEntrance(30)){
  echo 'enter';
}

require 'index.view.php';
