<?php
session_start();
$koneksi = new mysqli("localhost","root","","db_peralatan");
date_default_timezone_set("Asia/Jakarta");


function redirect($url)
{
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}
?>