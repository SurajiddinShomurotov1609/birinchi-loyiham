<?php

// Jadvalga malumot kiritish
require_once "index.php";


//$sql = "INSERT INTO users(firstname,lastname,email) values ( 'Surajiddin','Shomurotov','shomurotovsurajiddin@gmail.com')";
//if (mysqli_query($conn, $sql)) {
//    echo "Yangi yozuv muvaffaqiyatli yaratildi";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}


//jadvaldagi hamma malumotni tanlash
//$sql = "select*from users";
//$result = mysqli_query($conn,$sql);
//var_dump(($result));


// Malumotlarni orgartirish
//$sql = "UPDATE users SET firstname = 'Hojiakbar',lastname = 'Atabayev',email = 'hatabayev@gmail.com' WHERE id=2";
//if (mysqli_query($conn, $sql)) {
//    echo "Yozuv muvaffaqiyatli yangilandi";
//} else {
//    echo "Yozuvni yangilashda xatolik yuz berdi: " . mysqli_error($conn);
//}


// Malumotlarni o'chirish
$sql = "DELETE FROM users WHERE id=3";
if(mysqli_query($conn,$sql)){
    echo "Yozuv muvaffaqiyatli o'chdi";
}
else{
    echo "Yozuvni o'chirishda xatolik yuz berdi : ".mysqli_error($conn);
}

mysqli_close($conn);

?>