<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="css/calculator.css">
</head>
<body>
    <form action="" method="get" class="calculator-form">
        <div class="input-group">
            <label for="angka1">Angka Pertama</label>
            <input type="number" id="angka1" name="angka1" placeholder="Masukan Angka">
        </div>
        
        <div class="input-group">
            <label for="angka2">Angka Kedua</label>
            <input type="number" id="angka2" name="angka2" placeholder="Masukan Angka">
        </div>

        <div class="button-group">
            <input type="submit" name="tambah" value="+">
            <input type="submit" name="kurang" value="-">
            <input type="submit" name="kali" value="x">
            <input type="submit" name="bagi" value="/">
        </div>
    </form>

 </form>   



<?php
$angka1=$_GET['angka1'];
$angka2=$_GET['angka2'];

if(isset($_GET['tambah'])){
    $hasil=TAMBAH ($angka1, $angka2);
}

if(isset($_GET['kurang'])){
    $hasil=KURANG ($angka1, $angka2);
}

if(isset($_GET['kali'])){
    $hasil=KALI ($angka1, $angka2);
}

if(isset($_GET['bagi'])){
    $hasil=BAGI ($angka1, $angka2);
}



function TAMBAH ($angka1, $angka2) {
    return $angka1+$angka2;
}

function KURANG ($angka1, $angka2) {
    return $angka1-$angka2;
}

function KALI ($angka1, $angka2) {
    return $angka1*$angka2;
}

function BAGI ($angka1, $angka2) {
    return $angka1/$angka2;
}

echo "<p class='result'>Hasil penambahan dari $angka1 dan $angka2 adalah: $hasil</p>";

?>
</body>
</html>