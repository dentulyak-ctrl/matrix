<?php
switch ($lvl0)
{
   case "account":
   require "account/content.php";
   break;

   case "products":
   require "products/content.php";
   break; 

   case "rules":
   require "rules/content.php";
   break;

   case "aboutus":
   require "aboutus/content.php";
   break;

   default:
   $lvl0="default";
   require "default/content.php";
}
?>