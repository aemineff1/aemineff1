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
            border:1px solid #F7E98D;
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

<form method="POST" action="hasil.php">
    <!-- <form method="POST"> -->
    <label for="rg">Regu : </label>
    <select id="rg" name="rg">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select><br/>
        <input type="text" name="nd" placeholder="Nama Danru/Dantim"></input><br/>
        <input type="date" name="ta"></input><br/>
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
        <input type="text" name="j" placeholder="00:00"></input><br/>
        <label for="pu">Pengerahan Unit : </label>
        <select id="pu" name="pu">
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="Hilux">Hilux</option>
        </select><br/>
        <input type="text" name="k" placeholder="Nama Pemilik"></input><br/>
        <input type="text" name="a" placeholder="Alamat"></input><br/>
        <input type="number" name="dia" placeholder="Diameter Sarang Tawon"></input><br/>
        <input type="number" name="kt" placeholder="Ketinggian"></input><br/>
        <input type="number" name="ma" placeholder="Kerugian Materi"></input><br/>
        <input type="number" name="km" placeholder="Korban Meninggal"></input><br>
        <input type="number" name="kl" placeholder="Korban Luka"></input><br/>
        <input type="text" name="kd" placeholder="Kendala"></input><br/>
<div class="center">
        <input type="submit" class="submit">
        </div>

</form>