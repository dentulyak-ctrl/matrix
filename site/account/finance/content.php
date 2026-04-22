денег нет

<br>
<?php require "menu2.php"; ?>
<br>

<?php

$lvl2="default";
if(isset($_REQUEST["lvl2"]))$lvl2=$_REQUEST["lvl2"];
switch ($lvl2)
{
   case "balance":
   require "balance/content.php";
   break;
}

?>