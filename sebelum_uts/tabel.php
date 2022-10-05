<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <h1>Tak kasih Tabel masszeeee</h1><br>
    <style>
        table{
            background-color : #333
        }
        #nota {
            font-family : montserrat;
            border-collapse: collapse;
            width: 80%;
            margin: 40px auto;
        }
        #nota td,
        #nota th{
            border: 1px solid ;
            padding : 8px;
        }

        #nota tr :nth-child(even){
            background-color: #666;
        }

        #nota tr :hover{
            background-color: #333;
        }

        #nota th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
        }

        #nota tr:nth-child(1) th:nth-child(1){
            width: 10%;
        }
        #nota tr:nth-child(1) th:nth-child(2){
            width: 40%;
        }
        #nota tr:nth-child(1) th:nth-child(3){
            width: 10%;
        }

        h1,
        .text-center{
            text-align:center;
        }
        .abandoned:hover,
        .abandoned{
            background-color : white;
        }
    </style>
</head>

<?php
$datas = [
    ['no' =>1,
    'nama barang' => 'baju',
    'banyak item' => 2,
    'harga' => 50000
],
[
    'no' =>2,
    'nama barang' => 'celana',
    'banyak item' => 1,
    'harga' => 150000
],
[
    'no' =>3,
    'nama barang' => 'sepatu',
    'banyak item' => 1,
    'harga' => 325000
],
[
    'no' =>4,
    'nama barang' => 'topi',
    'banyak item' => 1,
    'harga' => 75000
],
[
    'no' =>5,
    'nama barang' => 'kacamata',
    'banyak item' => 1,
    'harga' => 200000
],
];

$total = 0;
$diskon = 10/100;
$pajak = 10/100;

?>
<body>
    <table id="nota">
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Banya Item</th>
            <th>Harga Satuan</th>
            <th>Total Harga</th>
        </tr>
    <?php foreach ($datas as $data) : ?>
        <tr>
            <td class="text-center"><?= $data['no'];?></td>
            <td><?= $data['nama barang']; ?></td>
            <td class="text-center"><?=number_format($data['banyak item'],0,",","."); ?></td>
            <td class="text-center">Rp.<?=number_format($data['harga'],0,",","."); ?></td>
            <?php $total += $data['banyak item']*$data['harga']?>
            <td class="text-center">Rp.<?=number_format($data['banyak item'] * $data['harga'],0,",","."); ?></td>
        </tr>
    <?php endforeach; ?>
        <tr>
            <td colspan="3" rowspan="4" class="abandoned"></td>
            <td>Jumlah Total Rp.</td>
            <td class ="text-center">Rp. <?= number_format($total,0,",","."); ?></td>
        </tr>
        <tr>
            <td>Diskon % </td>
            <td class="text-center"><?= $diskon * 100; ?>%</td>
    </tr>
        <tr>
            <td>pajak % </td>
            <td class="text-center"><?= $pajak * 100; ?>%</td>
    </tr>
    <tr>
        <td>Total Harga Rp.</td>
        <td class="text-center">Rp.<?= number_format(($total - ($total * $diskon)) + ($total * $pajak), 0, ",","."); ?></td>
    </tr>
    </table>
        </body> 

</html>