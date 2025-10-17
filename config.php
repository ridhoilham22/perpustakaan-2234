<?php

//user pass database
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name 'db_perpustakaan';

// mematikan error reporting untuk mysqli
//mysqli_report

$mysqli = nem mysqli($db_host, $db_user, $db_pass, $db_name);

if ($mysqli ->conncet_error){
    die("koneksi gagal: " . $mysqli->connect_error);
}
?>