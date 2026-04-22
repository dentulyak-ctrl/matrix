<br>
<?php require "menu1.php"; ?>
<br>
<?php

switch ($lvl1)
{
   case "partners":
   require "partners/content.php";
   break;

   default:
   $lvl1="partners";
   require "partners/content.php";
}


?>