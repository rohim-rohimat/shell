<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Shell</h1>
        <label for="liter">Liter :</label>
        <input type="number" name="liter" id="liter" min="0" max="1000000" required>
        <br>
            <label for="jenis">jenis :</label>
            <select type="name" name="jenis" id="jenis">
                <option value="S Super">Shell Super</option>
                <option value="S V-Power">Shell V-Power</option>
                <option value="S V-Power Diesel">Shell V-Power Diesel</option>
                <option value="S V-Power Nitro">Shell V-Power Nitro</option>
            </select>
            <br>
        <button type="submit" name="beli">Beli</button>
    </form>
    <?php
    //panggil file nya
    require 'logic.php';
    //baru dibuka, langsung set harganya
    $logic = new pembelian();
    $logic->setHarga(10000,15000,18000,20000);
    //kalau udah piks beli
    if(isset($_POST['beli'])) {
        $logic->jenisYangDipilih = $_POST['jenis'];
        $logic->totalLiter = $_POST['liter'];
        $logic->totalHarga();
        $logic->cetakBukti();
    }
    ?>
</body>
</html>