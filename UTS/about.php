<!DOCTYPE html>
<html>
  <head>
      <title>HOME UTS </title><link rel="shortcut icon" href="gambar1.jpg">
        	<meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                * {
                box-sizing: border-box;
  	             }

                    .menu {
                        float: left;
                         width: 20%;
                        text-align: center;
                        }

                    .menu a {
                        background-color: grey;
                        padding: 10px;
                        margin-top: 8px;
                        display: block;
                        width: 100%;
                        color: black;
                     }

                    .main {
                        float: left;
                        width: 60%;
                        padding: 0 40px;
                    }

                    .right {
                    background-color: grey;
                    height: 100%;
                    float: right;
                    width: 20%;
                    padding: 15px;
                    height: 250px;
                    margin-top: 7px;
                    text-align: center;
                    }

                    @media only screen and (max-width: 620px) {
                    /* For mobile phones: */
                    .menu, .main, .right {
                    width: 100%;
                    }
                }
            </style>
    </head> 
        <body style="font-family:Verdana;color:green;">
        <div style="background-color:grey;padding:15px;text-align:center;">
            <img src="amd.jpg" align="left" width="100px" height="80px"/><h1>welcome website UTS</h1>
            </div>
            <div style="overflow:auto">
            <div class="menu">
                <dd><a href="admin.php"> beranda </a></dd>
                <dd><a href="about.php">about me </a></dd>
                <dd><a href="hitung.php">Tabel Perhitungan </a></dd>
                <dd><a href="tambahdata.php">Tambah Data </a></dd>
                <dd><a href="simpan_data.php">Simpan Hasil </a></dd>
                <dd><a href="index.php">LOG OUT </a></dd>
        </div>

        <div class="main">
        <h2>About me</h2>
            <p>Nama : Rachmad Andre Ramadhani <br>
               NIM : 1914311019 <br>
               UNIVERSITAS BHAYANGKARA SURABAYA<br>
        </p>
        </div>

        <div class="right">
            <h2>About</h2>
            <p>Saya Rachmad Andre seorang Mahasiswa teknik informatika dari universitas Bhayangkara.</p>
        </div>
        </div>

        <div style="background-color:grey;text-align:center;padding:7px;margin-top:220px;">© copyright Rachmad Andre</div>

  </body>
</html>
