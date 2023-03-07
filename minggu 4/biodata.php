<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicss.css">
    <title>Document</title>
</head>

    <?php
        $header1 = "Aku";
        $header2 = "Studi";
        $header3 = "Domisili";    
        $first_name = "Nugraha";
        $middle_name = "Varrel";
        $last_name = "Kusuma";
        $desk_header1 = "adalah seorang pengangguran yang berumur kepala 2, 
                            ia memiliki zodiak yang keren yaitu Sagitraius";
        $desk_header2 = "Ia sedang berkuliah di Universitas Pembangunan Veteran Jawa Timur. Dengan otak yang dangkal 
                            ia dengan percaya dirinya mengambil jurusan yang berat yaitu Informatika.";
        $desk_header3 = "Ia berasal dari Surabaya, dengan rumahnya berada di Surabaya bagian selatan dengan rumah 
                            yang mempunyai tetangga yang tidak ramah yaitu di Kebraon Indah Permai A-17.";
    ?>

<body>
    <nav>
        <ul>
            <li><a href="#">PEMWEB</a></li>
            <li><a href="#kedua">Aku</a></li>
            <li class="right"><a href="#ketiga">Skill</a></li>
        </ul>
    </nav>

    <div class="pertama">
        <img src="pemandangan.jpg" alt="Nugraha Varrel Kusuma" class="cok">
    </div>
    <br>

    <div id="kedua">
        <img src="varrel.jpeg" alt="" class="captt">
        <div class="akuuu">
            <h1>
                <?php
                    echo $header1;
                ?>
            </h1>
            <p class="pengangguran">
                <?php
                    echo $first_name . " " . $middle_name . " " . $last_name . " " . $desk_header1;
                ?>
            </p>
            <h1>
                <?php
                    echo $header2;
                ?>
            </h1>
            <p class="stud">
                <?php
                    echo $desk_header2;
                ?>
            </p>
            <h1>
                <?php
                    echo $header3;
                ?>
            </h1>
            <p class="dom">
                <?php
                    echo $desk_header3;
                ?>
            </p>
        </div>
    </div>
    <br>
    <div id="ketiga">
        <img src="otak.jpg" alt="" class="captt">
        <div class="akuuu">
            <p class="pengangguran">
                <p class="gambar">
                    <img src="HTML.png" alt="" class="html">
                    <img src="CSS.png" alt="" class="css">
                    <img src="JSpng.png" alt="" class="js">
                </p>
            </p>
        </div>
    </div>
</body>

</html>