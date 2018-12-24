<?php
include('/home/pc-13/Code/project-master/koneksi.php');
$a = $_POST['judul'];
$b = $_POST['content'];
$c = $_POST['foto'];
$tambah = "INSERT INTO artikel SET judul='$a',content='$b',foto='$c'";
mysqli_query($koneksi, $tambah);
header("location:/admin/articles/index.php");