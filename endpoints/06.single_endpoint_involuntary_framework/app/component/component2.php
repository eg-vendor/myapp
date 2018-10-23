<?php

// THE PROGRAMMER FOLLOWS THE RULES AND CONVENTIONA OF THE FRAMEWORK
$input      = "This is component 2 within a framework";
$input     .= my_not_nice_function (" - done back-end 2");
$output     = "output=".$input;

?>

<pre><?php echo htmlspecialchars ($output); ?></pre>

