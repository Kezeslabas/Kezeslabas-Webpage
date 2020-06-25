<?php 

include "include/functions.php";

include "pages/begin.php"; 

$page = "home";

if(isset($_GET['page']))
{
	$page = $_GET['page'];
}
include "pages/".$page.".php";

include "pages/end.php"; 

?>