<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="baca.css">
    <title>Perpustakaan</title>
</head>

<body>
    <nav>
        <div class="buttonposition">
            <a href="form.php" type="button" class="button">
                <i>Tambahkan Data</i>
            </a>
        </div>
        <h2>Perpustakaan</h2>
    </nav>

    <div style="height:100px"></div>

    <?php
    $myfile = "perpus.txt";
    if (file_exists(($myfile))) {
        $read = file($myfile);
        if (count($read) > 0) {
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Tahun Terbit</th>
                        <th>Cover Buku</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($read as $buku) {
                        $isibuku = explode("-", $buku);
                        echo '<td>' . $isibuku[0] . '</td>';
                        echo '<td>' . $isibuku[1] . '</td>';
                        echo '<td>' . $isibuku[2] . '</td>';
                        echo "<td><img src='img/".$isibuku[3]."' height='100'></td>";
                        ?>
                    <td>
                        <a href="form.php?kode=<?php echo $isibuku[0]; ?>" type="button" class="btn_edit">
                            <i>Edit</i>
                        </a>
                        <a href="delete.php?kode=<?php echo $isibuku[0]; ?>" type="button" class="btn_hapus">
                            <i>Hapus</i>
                        </a>
                    </td>
                </tr>
                <?php
            }

        } else {
            echo '<h3 style="margin-left :50%">Data tidak ada<h3>';
        }
    } else {
        echo '<h3 style="margin-left :50%">File tidak ada<h3>';
    }
    ?>
        </tbody>
    </table>
</body>

</html>