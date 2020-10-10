<?php

include "connection.php";

$input=$db->exec("update table_siswa set nama_siswa='".$_POST['nama_siswa']."',sekolah='".$_POST['sekolah']."',motivasi='".$_POST['motivasi']."'where id_siswa=".$_POST['id_siswa']);

if($input)
{
    header("Location:index.php");
}