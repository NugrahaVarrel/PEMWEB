<?php
$judulbuku = '';
$pengarang = '';
$tahunterbit = '';
$cover = '';

if (isset($_GET['judul'])) {
    $judulbuku = $_GET['judul'];

    //mengambil data buku berdasarkan kode
    $myfile = 'perpus.txt';
    if (file_exists($myfile)) {
        $read = file($myfile);
        foreach ($read as $buku) {
            $bukuinfo = explode('-', $buku);
            if ($bukuinfo[0] === $judul) {
                $pengarang = $bukuinfo[1];
                $tahunterbit = $bukuinfo[2];
                $cover = $bukuinfo[3];
                break;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="format.css">
</head>

<body>
    <nav>
        <h2>Tambah Data Buku</h2>
    </nav>

    <div style="height:100px"></div>

    <div class="contentambah">
        <form method="POST" action="proses.php" enctype="multipart/form-data">
            <?php
            if (!isset($_GET['judulbuku'])) {
                // echo '<label for="kode">Judul</label>';
            }
            ?>
            <label for="judulbuku">
                Judul Buku
            </label>
            <input required type="text" name="judulbuku" id="judulbuku" placeholder="Masukkan Judul"
                value="<?php echo $judulbuku; ?>" required>
            <label for="pengarang">
                Pengarang
            </label>
            <input type="text" name="pengarang" id="pengarang" placeholder="Masukkan Pengarang"
                value="<?php echo $pengarang; ?>">
            <label for="tahunterbit">
                Tahun Terbit
            </label>
            <input type="text" name="tahunterbit" id="tahunterbit" placeholder="Masukkan Tahun Terbit"
                value="<?php echo $tahunterbit; ?>">
            <label for="cover">Cover Buku</label>
            <?php if (isset($_GET['judul'])): ?>
                <input type="hidden" name="existing_cover" value="<?php echo $cover; ?>">
                <?php if (!empty($cover)): ?>
                    <img src="img/<?php echo $cover; ?>" alt="Cover Buku" width="200">
                    <input type="file" name="cover" accept="image/*">
                <?php else: ?>
                    <?php if (!empty($_POST['existing_cover'])): ?>
                        <img src="img/<?php echo $_POST['existing_cover']; ?>" alt="Cover Buku" width="200">
                    <?php else: ?>
                        <p>Tidak ada cover tersedia</p>
                    <?php endif; ?>
                <?php endif; ?>
            <?php else: ?>
                <input type="file" name="cover" accept="image/*">
            <?php endif; ?>

            <br><br>
            <?php if (isset($_GET['judul'])): ?>
                <button type="submit" name="aksi" value="edit">
                    <i aria-hidden="true"></i>
                    Simpan Perubahan
                </button>
            <?php else: ?>
                <button type="submit" name="aksi" value="add">
                    <i aria-hidden="true"></i>
                    Tambahkan
                </button>
            <?php endif; ?>
            <a href="baca.php" type="button">
                <i aria-hidden="true"></i>
                Batal
            </a>
        </form>
    </div>
</body>

</html>