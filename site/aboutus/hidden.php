<?php

$lvl1="default";
if(isset($_REQUEST["lvl1"]))$lvl1=$_REQUEST["lvl1"];

switch ($lvl1)
{
   case "partners":
   require "partners/hidden.php";
   break;

   default:
   $lvl1="partners";
   require "partners/hidden.php";
}


?>