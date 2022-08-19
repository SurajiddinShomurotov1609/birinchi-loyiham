<?php

//bazadagi malumtolarini jadval qilib chiqarish

require_once "index.php";

$sql="select * from users";
$result=mysqli_query($conn,$sql);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
          crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="card">
    <h1 align="center" class="text text-primary">Foydalanuvchilar ro'yhati</h1>
</div>
<div class="container card">
    <table class="table table-bordered ">
        <tr>
            <th>#</th>
            <th>Ism</th>
            <th>Familiya</th>
            <th>Email</th>
            <th>Sana</th>
        </tr>
        <?php
        if(mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_assoc($result)){

        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['firstname']?></td>
            <td><?php echo $row['lastname']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['reg_date']?></td>
        </tr>
        <?php

        }
        }
        ?>
    </table>
</div>

</body>
</html>
