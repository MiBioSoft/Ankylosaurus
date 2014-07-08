<?php

//create a connection to the server
$con = mysql_connect("localhost","root");
if (!$con)
  {
  die('Could not connect: '.mysql_error());
  }

//create the sql query
$sql = "CREATE DATABASE IF NOT EXISTS iGEM";

//create a whole new database
if (mysql_query($sql,$con))
  {
  echo "Database iGEM created<br>";
  }
else
  {
  echo "Error creating database: ".mysql_error()."<br>" ;
  }

//close the connection
mysql_close($con);

//create connection to database on the same server
$link =mysqli_connect("localhost", "root", "", "iGEM");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
 {echo "Connection successful.<br>";}

$adtab = 
"CREATE TABLE User
(
username VARCHAR(255),
password  VARCHAR(255)
)";

/*"CREATE TABLE Protocols(p_id int, title varchar(255), author varchar(255), created date, description varchar(255))";*/

if (mysqli_query($link, $adtab))
  {
  echo "table created";
  }
else
  {
  echo "Error creating table: ".mysqli_error($link);
  }


?>
