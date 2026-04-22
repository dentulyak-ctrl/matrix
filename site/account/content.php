<br>
<?php require "menu1.php"; ?>
<br>
<?php
switch ($lvl1)
{
   case "personal":
   require "personal/content.php";
   break;

   case "finance":
   require "finance/content.php";
   break; 

   case "organization":
   require "organization/content.php";
   break; 

   default:
   $lvl1="personal";
   require "personal/content.php";
}


?>