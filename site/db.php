<?php
################### Подключение к базе данных ###############################
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('/var/www-database/db/db.sqlite');
    }
}
#################### Ссылка на ресурс #######################################
$db = new MyDB();

#$db->exec('CREATE TABLE foo (bar STRING)');
#$db->exec("INSERT INTO foo (bar) VALUES ('This is a test')");

$result = $db->query('SELECT * FROM users');
while ($row=$result->fetchArray())
  {
     $users[$row[0]]["name"]=$row[1];
     $users[$row[0]]["lastname"]=$row[2];
     $users[$row[0]]["sex"]=$row[3];
     $users[$row[0]]["age"]=$row[4];
     $users[$row[0]]["city"]=$row[5];
     $users[$row[0]]["education"]=$row[6];
  }

$result = $db->query('SELECT * FROM education');
while ($row=$result->fetchArray())
  {
     $education[$row[0]]["name"]=$row[1];
     $education[$row[0]]["city"]=$row[2];
  }

$result = $db->query('SELECT * FROM cities');
while ($row=$result->fetchArray())
  {
     $cities[$row[0]]["name"]=$row[1];
     $cities[$row[0]]["region"]=$row[2];
  }

$result = $db->query('SELECT * FROM sex');
while ($row=$result->fetchArray())
  {
     $sex[$row[0]]["name"]=$row[1];
  }

$result = $db->query('SELECT * FROM regions');
while ($row=$result->fetchArray())
  {
     $regions[$row[0]]["name"]=$row[1];
     $regions[$row[0]]["parent"]=$row[2];
  }
?>


