<?php 
    // Memanggi file konektor.php yang berisi koneksi di database
    include ('konektor.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>
        Employees
    </h1>
    <div>
        <table class = "tbl1"; border : 1;>
            <thead class = "table1";>
                <tr>
                    <th> Employee Number </th>
                    <th> Last Name </th>
                    <th> First Name </th>
                    <th> Extension </th>
                    <th> Email </th>
                    <th> Office Code </th>
                    <th> Reports To </th>
                    <th> Job Title </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    // Proses menampilkan data dari database
                    // siapkan query SQL
                    $query = "SELECT * FROM `employees`";
                    $result = mysqli_query(connection(), $query);
                ?>
                <?php while ( $data = mysqli_fetch_array($result)):?>
                    <tr>
                        <td><?= $data ['employeeNumber']; ?></td>
                        <td><?= $data ['lastName']; ?></td>
                        <td><?= $data ['firstName']; ?></td>
                        <td><?= $data ['extension']; ?></td>
                        <td><?= $data ['email']; ?></td>
                        <td><?= $data ['officeCode']; ?></td>
                        <td><?= $data ['reportsTo']; ?></td>
                        <td><?= $data ['jobTitle']; ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
    <h1>
        Productlines
    </h1>
    <div>
        <table border : 1;>
            <thead class = "table2";>
                <tr>
                    <th>Product Lines</th>
                    <th>Text Description</th>
                    <th>HTML Description</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // proses menampilkan data dari database
                    // siapkan query SQL
                    $query = "SELECT * FROM `productlines`";
                    $result = mysqli_query(connection(), $query);
                ?>
                <?php while ( $data = mysqli_fetch_array ($result)) : ?>
                    <tr>
                        <td><?=$data['productLine']; ?></td>
                        <td><?=$data['textDescription']; ?></td>
                        <td><?=$data['htmlDescription']; ?></td>
                        <td><?=$data['image']; ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>
</body>
</html>