<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Estas en ingenieria</h1>
  <p>Programador: <?= $desarrollador ?></p>
  <hr>


  <ul>
    <?php foreach($lenguajes as $len): ?>
      <li> <?= $len ?> </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>