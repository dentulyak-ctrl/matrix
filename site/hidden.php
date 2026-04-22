<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();
require "db.php";
$context=[];
$lvl0="default";
if(isset($_REQUEST["lvl0"]))$lvl0=$_REQUEST["lvl0"];

switch ($lvl0)
{
   case "account":
   require "account/hidden.php";
   break;

   case "products":
   require "products/hidden.php";
   break; 

   case "rules":
   require "rules/hidden.php";
   break;

   case "aboutus":
   require "aboutus/hidden.php";
   break;

   default:
   $lvl0="default";
   require "default/hidden.php";
}


?>

