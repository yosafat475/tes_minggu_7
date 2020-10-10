<?php

include "connection.php";

$delete=$db->exec("delete from table_siswa where id_siswa=".$_GET['id_siswa']);

if($delete)
{
    header("Location:index.php");
}