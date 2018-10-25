<?php

// SCRIPTS MAY DO THIS VOLUNTARILY:
require './myapp_functions.php';



// THE PROGRAMMER NEED NOT FOLLOW ANY FRAMEWORK RULES OR CONVENTIONS
$input      = "This is endpoint 2 doing its own thing";
$input     .= my_not_nice_function (" - done back-end 2");
$output     = "output=".$input;


ob_start ();
?>

<pre><?php echo htmlspecialchars ($output); ?></pre>';

<img />


<?php
$front_end = ob_get_clean ();


// SCRIPTS MAY DO THIS VOLUNTARILY:
require './template.php';

?>