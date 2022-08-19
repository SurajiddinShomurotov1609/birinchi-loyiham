<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect("$servername", "$username", "$password","dars1");

if (!$conn) {
    die("Ulanish amalga oshmadi: " . mysqli_connect_error());
}
echo "Muvaffaqiyatli ulandi";

//create database
$sql = "CREATE DATABASE dars1";
//if(mysqli_query($conn,$sql)){
//    echo "Ma'lumotlar bazasi muvaffaqiyatli yaratildi";
//
//}
//else{
//    echo "Ma'lumotlar bazasini yaratishda xatolik yuz berdi:".mysqli_error($conn);
//}



?>
