<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1>Task for the day</h1>

<?= ucwords('hello my name is') ?>
  <ul>
    <?php foreach($task as $key => $value) : ?>
        <li>
          <strong><?= ucwords($key); ?>: </strong><?= $value; ?>
        </li>
    <?php endforeach; ?>
<!-- but foreach wont print out the boolean, so we need more control over that list item... -->
<br>
        <li>
        <!-- ternary operator -->
          <strong>Status: </strong><?= $task['completed'] ? 'Completed' :'Incomplete'; ?>
        </li>
        <li>
        <!-- longer form using conditional -->
        <strong>Status: </strong>
        <?php
        if($task['completed']){
          echo 'Complete ';
        } else{
          echo 'Incomplete &#9989';
        }
        ?>
        </li>

  <!-- using colon trick with if statement -->

        <li>
          <strong>Status: </strong>
          <?php if($task['completed']) : ?>
            <span class='icon'>&#9989;</span>
          <?php else : ?>
            <span class='icon'>Incomplete</span>
          <?php endif; ?>
        </li>
  </ul>

</body>
</html>
