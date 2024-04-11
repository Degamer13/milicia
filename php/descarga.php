<?php
include('Fuction_Backup.php');

echo backup_tables('localhost','root','','militares');

$fecha=date("Y-m-d");
header("Content-disposition: attachment; filename=db-backup-".$fecha.".sql");
header("Content-type: MIME");
readfile("../backups/db-backup-".$fecha.".sql");