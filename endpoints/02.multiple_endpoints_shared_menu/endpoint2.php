<?php

// Process inputs
$input      = "This is endpoint 2";

// Do some back-end stuff
$input     .= " - done back-end 2";

// Prepare outputs for client
$output     = "output=".$input;

// Echo front end
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

<?php require './menu.php'; ?>

    <section id="content">

      <pre><?php echo htmlspecialchars ($output); ?></pre>

    </section>

  </body>

</html>

