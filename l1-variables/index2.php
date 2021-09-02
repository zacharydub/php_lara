<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  header{
    background:#e3e3e3;
    padding:50px;
    text-align:center;
  }
  </style>
</head>
<body>

<header>
  <h1>
  <?php
  $greeting = 'hi there';
  //$name = 'zach';
  ////now, extracting data from url:
  $name = $_GET['name'];
  echo $greeting . " " . $name;
  ?>
  </h1>
  <h3>
  <?= 'right on ' . $name ?>
  </h3>
  <h5>
  <?= "hello, dear " . htmlspecialchars($_GET['name']) ?>
  </h5>
  </header>
</body>
</html>
