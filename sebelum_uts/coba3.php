<?php
$total = "Total disini adalah :";
$sepatu = 25000;
$tas = 60000;
$topi = 15000;
$sabuk = 26000;
$seragamsekolah = 90000;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>Tugas PHP & HTML</title>
</head>
<body>
<table class="tabelsekolah", border="5">
        <caption>Harga Barang Atribut Sekolah di Pasar</caption>
        <tr>
            <th>Jumlah barang</th>
            <th>Keterangan</th>
            <th>Harga Satuan</th>
            <th>Harga total</th>
        </tr>
        <?php
        $hasiljumlahsepatu = $sepatu+$sepatu;
        $hasiljumlahtas = $tas+$tas+$tas;
        $hasiljumlahtopi = $topi+$topi+$topi+$topi+$topi;
        $hasiljumlahsabuk = $sabuk;
        $hasiljumlahseragamsekolah = $seragamsekolah;
        $totalsemuabarang = "Total Semua Barang Adalah: ";
        $hasil = $hasiljumlahsabuk+$hasiljumlahsepatu+$hasiljumlahseragamsekolah+$hasiljumlahtopi+$hasiljumlahtas;
        ?>
        <tr>
            <td>2</td>
            <td>Sepatu</td>
            <td><?php echo $sepatu; ?></td>
            <td><?php echo $hasiljumlahsepatu; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Tas</td>
            <td><?php echo $tas; ?></td>
            <td><?php echo $hasiljumlahtas; ?></td>
        <tr>
            <td>2</td>
            <td>Topi</td>
            <td><?php echo $topi; ?></td>
            <td><?php echo $hasiljumlahtopi; ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sabuk</td>
            <td><?php echo $sabuk; ?></td>
            <td><?php echo $hasiljumlahsabuk; ?></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Seragam Sekolah</td>
            <td><?php echo $seragamsekolah; ?></td>
            <td><?php echo $hasiljumlahseragamsekolah; ?></td>
        </tr>
        <tr> 
            <td><?php echo $totalsemuabarang; ?></td>
            <td><?php echo $hasil; ?></td>
        </tr>
</body>
</html>



