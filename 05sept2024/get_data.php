<?php

  $id = $_GET['id'];
//  $cities = array(
//  1=>"City of Mosque",
//  2=>"Populer for Roshomolai",
//  3=>"City of Mango"
//  );
//  echo $cities[$id];

$db = new mysqli("localhost:3310","root","","wdpf60");
$sql = $db->query("SELECT * FROM area WHERE id = '$id'");
$row = $data->fetch_assoc();
echo $row['id']." ".$row['cities']." ".$row['deatils'];
?>
