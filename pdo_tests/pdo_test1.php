<?php

$pdo_object = new \PDO (
    'mysql:host=localhost;dbname=myapp;port=3306;charset=utf8'
   ,'myapp'
   ,'9yf48kvf%^'
);
if (!$pdo_object) {
    $results = "Failed to connect";
}
else {
    $results = $pdo_object->query ('SELECT `user_Email`,`user_Display_Name` FROM `myapp_user`');
    if (!$results) {
        $results = "Query failed";
    }
}

?><!doctype html>
<html class="no-js" lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="./icon.png">
    <title>Hello from MyApp</title>
  </head>
  
  <body>

    <nav>
      <ul>
        <li><a href="./pdo_test.php">PDO test</a></li>
        <li><a href="./pdo_test2.php">PDO test with binding</a></li>
        <li><a href="./pdo_test3.php">PDO test returning only associative array</a></li>
        <li><a href="./pdo_test4.php">Read input from $_GET</a></li>
        <li><a href="./pdo_test5.php">Read input from $_POST</a></li>
      </ul>
    </nav>

    <section id="content">

<?php foreach ($results as $row): ?>
      <pre><?php print_r ($row); ?></pre>
<?php endforeach; ?>
    </section>

  </body>

</html>

