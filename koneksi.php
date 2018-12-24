<?php
$host = "localhost"; //nama host dari mysql
$user ="root"; // username host mysql
$pass = "123"; //password host mysql
$database = "project";//nama database
$koneksi = mysqli_connect($host,$user,$pass,$database);
if ($koneksi){

}else{
    echo "koneksi gagal";
}