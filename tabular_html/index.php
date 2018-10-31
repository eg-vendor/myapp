<?php

namespace Myapp;

require './configuration/config.php';
require './class/Db.class.php';

$db = new \MyApp\Db (MYAPP_DSN,MYAPP_USER,MYAPP_PWD);

if (!$db->connected()) {
    $results = "Failed to connect";
}
else {
    $results = $db->query ('SELECT `user_Email`,`user_Display_Name` FROM `myapp_user`');
}

?><!doctype html>
<html class="no-js" lang="">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello from MyApp</title>

    <link rel="stylesheet" href="./style.css">

  </head>
  
  <body>

    <h2>Tabular data</h2>

    <section id="content">

      <h3>Diagnostic</h3>
      <pre><?php print_r ($results); ?></pre>

      <h3>HTML table</h3>
      <table>
        <thead>
          <tr>
            <th>Email</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
<?php foreach ($results as $row): ?>
          <tr>
            <td><?php echo htmlspecialchars ($row['user_Email']); ?></td>
            <td><?php echo htmlspecialchars ($row['user_Display_Name']); ?></td>
          </tr>
<?php endforeach; ?>
        </tbody>
      </table>

    </section>

  </body>

</html>

