<?php

// jadval yaratish

require_once "index.php";

//$sql = "CREATE TABLE users(id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,firstname VARCHAR(100) NOT NULL ,
//lastnaem VARCHAR(100) NOT NULL ,email VARCHAR(50),reg_date TIMESTAMP DEFAULT  CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
//if(mysqli_query($conn,$sql)){
//    echo "Foydalanuvchi nomli jadvali yaratildi";
//}
//else{
//    echo "Jadval yaratilmadi".mysqli_error($conn);
//}
//mysqli_close($conn);

$sql = "CREATE TABLE users (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(100) NOT NULL,
lastname VARCHAR(100) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

//if (mysqli_query($conn, $sql)) {
//    echo "Foydalanuvchi nomli jadval yaratildi";
//} else {
//    echo "Jadvalni yaratishda xatolik yuz berdi: " . mysqli_error($conn);
//}


mysqli_close($conn);


?>