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
  <?= $greeting; ?>
  </h1>
  </header>

  <ul>
      <?php
        foreach ($names as $name){
          echo "<li>$name</li>";
        }
      ?>

      <?php foreach($names as $name) : ?>
      <li><?= $name; ?></li>
      <?php endforeach; ?>

      <?php foreach($animals as $animal) : ?>
      <li><?= $animal; ?></li>
      <?php endforeach; ?>

      <?php foreach($person as $key => $attr) : ?>
      <li><strong><?= "$key: "; ?></strong> <?= $attr; ?></li>
      <!--<li><?= "$key : $attr"; ?></li>-->

      <?php endforeach; ?>

  </ul>
</body>
</html>
