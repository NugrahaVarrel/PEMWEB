<?php 
include ('konektor.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic Model Database</title>
    <link rel="stylesheet" href="opsi.css">
</head>
<body>
    <h2>Tabel Customers</h2>
    <a href="tambahdatacustomer.php">Tambah Data Produk</a>
    <table border :3;>
        <thead>
            <tr>
                <th>Customer Number</th>
                <th>Customer Name</th>
                <th>Contact Last Name</th>
                <th>Contact First Name</th>
                <th>Phone</th>
                <th>Address Line 1</th>
                <th>Address Line 2</th>
                <th>City</th>
                <th>State</th>
                <th>Postal Code</th>
                <th>Country</th>
                <th>Sales Rep Employee Number</th>
                <th>Credit Limit</th>
                <th class="opsi">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            //menampilkan data dari database
            $query = "SELECT * FROM customers";
            $result = mysqli_query(connection(), $query);
            ?>

            <?php while($data = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $data ['customerNumber']; ?></td>
                    <td><?php echo $data ['customerName']; ?></td>
                    <td><?php echo $data ['contactLastName']; ?></td>
                    <td><?php echo $data ['contactFirstName']; ?></td>
                    <td><?php echo $data ['phone']; ?></td>
                    <td><?php echo $data ['addressLine1']; ?></td>
                    <td><?php echo $data ['addressLine2']; ?></td>
                    <td><?php echo $data ['city']; ?></td>
                    <td><?php echo $data ['state']; ?></td>
                    <td><?php echo $data ['postalCode']; ?></td>
                    <td><?php echo $data ['country']; ?></td>
                    <td><?php echo $data ['salesRepEmployeeNumber']; ?></td>
                    <td><?php echo $data ['creditLimit']; ?></td>
                    <td>
                        <a href="editdatacustomer.php?customerNumber=<?php echo $data['customerNumber']; ?>">Edit</a></li> ||
                        <a href="hapusdatacustomer.php?customerNumber=<?php echo $data['customerNumber']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
    <br>
    <h2>Tabel Produk</h2>
    <a href="tambahdataproduk.php">Tambah Data Produk</a>
    <table border :3;>
        <thead>
            <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product Line</th>
                <th>Product Scale</th>
                <th>Product Vendor</th>
                <th>Product Description</th>
                <th>quantity In Stock</th>
                <th>Buy Price</th>
                <th>MSRP</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            //menampilkan data dari database
            $query = "SELECT * FROM products";
            $result = mysqli_query(connection(), $query);
            ?>

            <?php while($data = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $data ['productCode']; ?></td>
                    <td><?php echo $data ['productName']; ?></td>
                    <td><?php echo $data ['productLine']; ?></td>
                    <td><?php echo $data ['productScale']; ?></td>
                    <td><?php echo $data ['productVendor']; ?></td>
                    <td><?php echo $data ['productDescription']; ?></td>
                    <td><?php echo $data ['quantityInStock']; ?></td>
                    <td><?php echo $data ['buyPrice']; ?></td>
                    <td><?php echo $data ['MSRP']; ?></td>
                    <td>
                        <a href="editdataproduk.php?productCode=<?php echo $data['productCode']; ?>">Edit</a> ||
                        <a href="hapusdataproduk.php?productCode=<?php echo $data['productCode']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</body>
</html>