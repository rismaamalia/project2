<?php
include('/home/pc-13/Code/project-master/koneksi.php');
$a = $_POST['judul'];
$b = $_POST['content'];
$c = $_POST['foto'];
$edit = "UPDATE project SET judul='$a',content='$b',foto='$c'";
mysqli_query($koneksi, $edit);
header ("location:index.php");
