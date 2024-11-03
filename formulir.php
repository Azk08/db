<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Data.php" method="post">
    <h1></h1>
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>Jam Masuk</td>
            <td><input type="datetime" name="jam" id="jam"></td>
        </tr>
        <tr>
            <td>Jam Keluar</td>
            <td><input type="datetime" name="Jam selesai" id="Jam selesai"></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td><input type="number" name="gaji" id="gaji"></td>
        </tr>
        <tr>
            <td>Total Gaji Didapat</td>
            <td><input type="number" name="Hasil" id="Hasil"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Kirim"></td>
        </tr>
    </table>
    </form>
</body>
</html>