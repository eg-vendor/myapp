<?php

// Shared function library
require './myapp_functions.php';

// Process inputs
$input      = "This is endpoint 2";

// Do some back-end stuff
$input     .= my_nice_function (" - done back-end 2");

// Prepare outputs for client
$output     = "output=".$input;

// Put all HTML into a variable with the outputs instantiated
$front_end = '<pre>'.htmlspecialchars ($output).'</pre>';

// Instantiate the template with the generated HTML
require './template.php';

?>