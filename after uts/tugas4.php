<!-- no 1 -->
<html>

<head>
    <title>No Antrian</title>
</head>

<body>
    <h1>pengambilan No antrian</h1>
    <table>
        <tr>
            <form action="" method="POST">
                <td>Masukkan Nomor Antrian :</td>
                <td>

                    <input type="text" name="antrian">
                </td>
                <td><input type="submit" value="kirim"></td>
        </tr>
        </form>
    </table>
    <?php
    if (isset($_POST['antrian'])) {
        $antrian = $_POST['antrian'];
        switch ($antrian) {
            case 1;
                echo "no Antrian ($antrian) nur achmad";
                break;
            case 2;
                echo "no Antrian ($antrian) david febri";
                break;
            case 3;
                echo "no Antrian ($antrian) muhammad wahyudi";
                break;
            case 4;
                echo "no Antrian ($antrian) Muhammad fasichul";
                break;
            default;
                echo 'Nama tidak tersedia';
                break;
        }
    }
    ?>
</body>

</html>