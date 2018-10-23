<?php

// Process inputs
$input      = "This is endpoint 2";

// Do some back-end stuff
$input     .= " - done back-end 2";

// Prepare outputs for client
$output     = "output=".$input;

// Echo top template
require './top.php';

// Echo front end
?>

<pre><?php echo htmlspecialchars ($output); ?></pre>

<?php

require './bottom.php';

?>