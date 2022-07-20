        <?php
            function tgl_indo($tanggal){
                $bulan = array (
                    1 =>   "Januari",
                    "Februari",
                    "Maret",
                    "April",
                    "Mei",
                    "Juni",
                    "Juli",
                    "Agustus",
                    "September",
                    "Oktober",
                    "November",
                    "Desember"
                );
	        $pecahkan = explode("-", $tanggal);
                return $pecahkan[2] . " " . $bulan[ (int)$pecahkan[1] ] . " " . $pecahkan[0];
            }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            max-width: 500px;
        }
        body{            
            padding:6px
            }
        form{
            display: block;
            margin-left:auto;
            margin-right:auto;
        }
        textarea#kopas {
            width: 95%;
            line-height:1.5;
            height:520px;
            margin-top: 5px;
            border-radius:3px;
            border:5px solid #F7E98D;
            font:13px Tahoma, cursive;
            transition:box-shadow 0.5s ease;
            box-shadow:0 4px 6px rgba(0,0,0,0.1);
            background:linear-gradient(#F9EFAF, #F7E98D);
            background:-o-linear-gradient(#F9EFAF, #F7E98D);
            background:-ms-linear-gradient(#F9EFAF, #F7E98D);
            background:-moz-linear-gradient(#F9EFAF, #F7E98D);
            background:-webkit-linear-gradient(#F9EFAF, #F7E98D);
            margin-left: auto;
            margin-right: auto;
        }
        label{
            padding:7px;
        }
        input{
            width:95%;
            height:20px;
            margin: 3px;
        }
        .center{
            display:flex;
            justify-content: center;
        }
        .submit{

            width:100px;
            height:40px;
        }

    </style>

</head>
<body>
    <h1>EZ BA Rescue</h1>


    <textarea id="kopas">
Kepada
Yth.
1. Walikota Cirebon
2. Kepala Dinas Pemadam Kebakaran dan penyelamatan Kota Cirebon

Perihal     : Laporan Penanganan Animal Rescue Jenis Tawon Vespa Affinis
        
Laporan: 
1. Pengawas : Kabid Pengendalian Pemadaman dan Penyelamatan Kebakaran
2. Koordinator Lapangan : Kepala Seksi  Kesiapsiagaan, Operasi, dan Penyelamatan
3. Dan Mako : Akhirudin
4. Danton Peleton 3 : Masrohim
5. Wa Danton Peleton 3 : Yusup Kurniawan
6. Dantim <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frg = $_POST["rg"];
        if (empty($frg)) {
            echo "Harap diisi!";
        } else {
            echo $frg . " ";
            }
        }
        ?>Ton 3 : <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fnd = $_POST["nd"];
        if (empty($fnd)) {
            echo "Harap diisi!";
        } else {
            echo $fnd;
            }
        }
        ?>

7. Anggota Rescue dan Pemadaman Ton 3

Objek : Pemusnahan Sarang Tawon Vespa Affinis 
Waktu Pemusnahan: <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fta = date("Y-m-d", strtotime($_POST["ta"]));
            if (empty($fta)) {
                echo "Harap diisi!";
            } else {
                echo tgl_indo(date("$fta"));
                }
            }
        echo ", Pukul : ";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fj = $_POST["j"];
            if (empty($fj)) {
                echo "Harap diisi!";
            } else {
                echo $fj . " WIB";
                }
            }
        ?>

Pengerahan Unit : <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fpu = $_POST["pu"];
        if (empty($fpu)) {
            echo "Harap diisi!";
        } else {
            echo $fpu;
            }
        }
        ?>

Kediaman : <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fk = $_POST["k"];
        if (empty($fk)) {
            echo "Harap diisi!";
        } else {
            echo $fk;
            }
        }
        ?>

<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fa = $_POST["a"];
        if (empty($fa)) {
            echo "Isi Alamat!";
        } else {
            echo $fa;
            }
        }
        ?>   
Diameter : <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fdia = $_POST["dia"];
        if (empty($fdia)) {
            echo "Harap diisi!";
        } else {
            echo "±" . $fdia . "cm³";
            }
        }
        ?>

Ketinggian : <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fkt = $_POST["kt"];
        if (empty($fkt)) {
            echo "Harap diisi!";
        } else {
            echo "±" . $fkt . "m";
            }
        }
        ?>

Kerugian 
A. Materi: <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fma = $_POST["ma"];
        if (empty($fma)) {
            echo "-";
        } elseif ($fma == 0) {
            echo "-";
        } else {
            echo $fma;
            }
        }
        ?>

B. Korban 
Meninggal : <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $fkm = $_POST["km"];
                                    if (empty($fkm)) {
                                        echo "-";
                                    } elseif ($fkm == 0) {
                                        echo "-";
                                    } else {
                                        echo $fkm;
                                    }
                                }
                                ?>

Luka : <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $fkl = $_POST["kl"];
                                    if (empty($fkl)) {
                                    echo "-";
                                    } elseif ($fkl == 0) {
                                        echo "-";
                                    } else {
                                        echo $fkl;
                                    }
                                }
                                ?>


Kendala : <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $fkd = $_POST["kd"];
                if (empty($fkd)) {
                    echo "-";
                } else {
                    echo $fkd;
                }
            }
        ?>


Demikian laporan yang dapat di sampaikan.

Dan Mako</textarea>
<br>

    <button type="button" onclick="copy_text()">Copy</button>


        <script type="text/javascript">
    function copy_text() {
        document.getElementById("kopas").select();
        document.execCommand("copy");
        alert("Text berhasil dicopy");
    }
</script>

</body>
</html>