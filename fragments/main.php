<?php
// Get page from URL
$page = isset($_GET['page']) ? addslashes($_GET['page']) : 'home';

// Replace any slashes or dots
$page = str_replace(array('.'), '', $page);

// Get absolute path to file
$file = getcwd()."/pages/$page.php";

// If file exists, serve it!
if(file_exists($file)) {
	include($file);
} else { // File must not exist - give 404 error with page
	include('fragments/404.php');
}
?>