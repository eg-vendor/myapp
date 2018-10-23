<?php

// FRAMEWORK PROVIDES RESOURCES:
require './app/myapp_functions.php';
/*
Other resources might include
 * A framework class with utility methods and request handling
 * A database class or at least a database connection
*/

// FRAMEWORK CONTROLS WHEN OUTPUT HAPPENS
ob_start ();


// FRAMEWORK DECIDES WHAT YOU ARE ASKING FOR

$request_uri        = rtrim (explode('?',$_SERVER['REQUEST_URI'])[0],'/');
$component          = trim (substr($request_uri,strlen(dirname($_SERVER['PHP_SELF']))),'/');
$framework_info     = array (
    'note'          => 'This framework requires mod_rewrite enabled, and AllowOverride All set for &gt;Directory /var/www&lt;'
   ,'full_url'      => 'https(s)://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']
   ,'request_uri'   => $request_uri
   ,'component'     => $component
   ,'_GET'          => $_GET
);


// FRAMEWORK EXECUTES WHAT YOU ARE ASKING FOR
if (is_readable('./app/component/'.$component.'.php')) {
    require_once './app/component/'.$component.'.php';
}
else {
	require_once './app/component/404.php';
}

// FRAMEWORK SUPPLIES FRONT END MANAGEMENT:
$front_end = ob_get_clean ();
require './app/template.php';

?>
