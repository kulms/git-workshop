<?php
$host='localhost';
$user='user';
$pass='pass';
$dbname= 'yourdb';

mysqli_connect($host,$user,$pass,$dbname);

echo "connect success";