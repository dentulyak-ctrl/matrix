<?php

$lvl1="default";
if(isset($_REQUEST["lvl1"]))$lvl1=$_REQUEST["lvl1"];

switch ($lvl1)
{
   case "personal":
   require "personal/hidden.php";
   break;

   case "finance":
   require "finance/hidden.php";
   break; 

   case "organization":
   require "organization/hidden.php";
   break; 

   default:
   $lvl1="personal";
   require "personal/hidden.php";
}

?>