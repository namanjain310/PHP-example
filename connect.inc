<?php
$server='localhost'; 
$username='root'; 
$password='igdefault';
$databasename= 'example';



if (!$link = mysql_connect($server, $username, $password)) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db($databasename, $link)) {
    echo 'Could not select database';
    exit;
}

/*
$sql    = "select * from  `user` where `uname` like '%alok%'";
$result = mysql_query($sql, $link);
$num_rows = mysql_num_rows($result);
print_r($num_rows); die("exit"); */
?>
