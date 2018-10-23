<?php

// SCRIPTS MAY DO THIS VOLUNTARILY:
require './myapp_functions.php';



// THE PROGRAMMER NEED NOT FOLLOW ANY FRAMEWORK RULES OR CONVENTIONS
$input      = "This is endpoint 1 doing its own thing";
$input     .= my_nice_function (" - done back-end 1");
$output     = "output=".$input;
$front_end = '<pre>'.htmlspecialchars ($output).'</pre>';




// SCRIPTS MAY DO THIS VOLUNTARILY:
require './template.php';

?>