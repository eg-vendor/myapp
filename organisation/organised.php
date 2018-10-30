<?php

namespace Myapp;

require './configuration/config.php';
require './class/Db.class.php';

// Typically received as an element of either $_GET array or more commonly $_POST array
if (array_key_exists('email',$_POST)) {
    $email = $_POST['email'];
}
else {
    $email = '';
}

$db = new \MyApp\Db (MYAPP_DSN,MYAPP_USER,MYAPP_PWD);

if (!$db->connected()) {
    $results = "Failed to connect";
}
else {
    $results = $db->query ('SELECT `user_Display_Name` FROM `myapp_user` WHERE `user_Email`=?',$email);
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
        <li><a href="./organised.php">PDO test</a></li>
      </ul>
    </nav>

    <section id="content">

<?php foreach ($results as $row): ?>
      <pre><?php print_r ($row); ?></pre>
<?php endforeach; ?>
    </section>

    <form method="post" action="">
      <input type="email" name="email" value="<?php echo htmlspecialchars ($email); ?>" >
      <input type="submit" value="Request by POST" />
    </form>

  </body>

</html>

