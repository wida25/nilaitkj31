<?php
$hostdb = "localhost";
$userdb = "root";
$passdb = "tkjtkj";
$namedb = "31_assessment";
$con = mysqli_connect($hostdb,$userdb,$passdb,$namedb);
if (!$con) {
    die ("koneksi gagal:" . mysqli_connect_error());
}