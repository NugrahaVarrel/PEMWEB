<?php
$judulbuku = $_POST['judulbuku'] ?? '';
$pengarang = $_POST['pengarang'] ?? '';
$tahunTerbit = $_POST['tahunterbit'] ?? '';

if (isset($_FILES['cover'])) {
    $cover = $_FILES['cover']['name'];
    $cover_tmp = $_FILES['cover']['tmp_name'];
    move_uploaded_file($cover_tmp, 'img/' . $cover);
}

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] === 'add') {
        // Proses penambahan buku
        $buku = $judulbuku . '-' . $pengarang . '-' . $tahunTerbit . '-' . $cover . PHP_EOL;
        file_put_contents('perpus.txt', $buku, FILE_APPEND);
        header("Location: baca.php");
        exit();
    } elseif ($_POST['aksi'] === 'edit') {
        $judulbuku = $_POST['judulbuku'];
        $pengarang = $_POST['pengarang'];
        $tahunTerbit = $_POST['tahunterbit'];

        $myfile = 'perpus.txt';
        if (file_exists($myfile)) {
            $read = file($myfile);
            $output = '';
            foreach ($read as $buku) {
                $bukuinfo = explode('-', $buku);
                if ($bukuinfo[0] === $judulbuku) {

                    // Unggah gambar baru
                    if (isset($_FILES['cover']) && $_FILES['cover']['error'] === 0) {
                        if (($_FILES['cover']) !== '') {
                            // Menghapus file cover buku jika ada
                            $cover = trim($_POST['existing_cover']);
                            if (!empty($cover)) {
                                $cover_path = 'img/' . $cover;
                                if (file_exists($cover_path)) {
                                    unlink($cover_path);
                                }
                            }

                            $cover = $_FILES['cover']['name'];
                            $cover_tmp = $_FILES['cover']['tmp_name'];
                            move_uploaded_file($cover_tmp, 'img/' . $cover);
                            $buku = $judulbuku . '-' . $pengarang . '-' . $tahunTerbit . '-' . $cover . PHP_EOL;
                        } else {
                            $cover = $_POST['existing_cover'];
                            $buku = $judulbuku . '-' . $pengarang . '-' . $tahunTerbit . '-' . $cover;
                        }
                    } else {
                        $cover = $_POST['existing_cover'];
                        $buku = $judulbuku . '-' . $pengarang . '-' . $tahunTerbit . '-' . $cover;
                    }
                }
                $output .= $buku;
            }
            file_put_contents($myfile, $output);
            header("Location: baca.php");
            exit();
        }
    }
}

?>