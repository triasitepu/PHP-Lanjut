<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Form Pendaftaran</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_POST["nama"]; ?>!<br></h1>
    <table>
        <tr>
            <th><span>Nama Lengkap:</span></th>
            <td><span><?php echo $_POST["nama"]; ?></span></td>
        </tr>
        <tr>
            <th><span>NIM:</span></th>
            <td><span><?php echo $_POST["nim"]; ?></span></td>
        </tr>
        <tr>
            <th><span>Email:</span></th>
            <td><span><?php echo $_POST["email"]; ?></span></td>
        </tr>
        <tr>
            <th><span>Tempat, Tanggal Lahir:</span></th>
            <td><span><?php echo $_POST["tempat_lahir"]; ?>, <?php echo $_POST["tanggal"]; ?></span></td>
        </tr>
        <tr>
            <th><span>Alamat Rumah:</span></th>
            <td><span><?php echo $_POST["alamatrumah"]; ?></span></td>
        </tr>
        <tr>
            <th><span>Jenis Kelamin:</span></th>
            <td><span><?php echo $_POST["jenis_kelamin"]; ?></span></td>
        </tr>
    </table>
</body>
</html>
