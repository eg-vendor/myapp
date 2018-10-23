<!doctype html>
<html class="no-js" lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello from MyApp</title>
  </head>
  
  <body>

    <!-- MENU -->
<?php require './app/menu.php'; ?>

    <hr/>

    <section id="content">

<!-- FRAMEWORK OUTPUT -->
<?php echo $front_end; ?>

    </section>

    <hr/>

    <section id="framework-info">
      Framework information:
      <pre><?php print_r ($framework_info); ?></pre>
    </section>

    <img src="./media/test.png" width="64" />

  </body>

</html>

