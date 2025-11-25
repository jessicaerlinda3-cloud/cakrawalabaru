<?php
$no_rm       = $_POST['no_rm'];
$nama        = $_POST['nama'];
$alamat      = $_POST['alamat'];
$no_bpjs     = $_POST['no_bpjs'];
$penanggung  = $_POST['penanggung'];
$pemeriksaan = $_POST['pemeriksaan'];
$anamnesa    = $_POST['anamnesa'];
$pembayaran  = $_POST['pembayaran'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Pasien Masuk</title>

<style>
    body {
        font-family: 'Didact Gothic', sans-serif;
        background:url(Gemini_Generated_Image_fzq8k6fzq8k6fzq8.png) center/cover no-repeat;
        margin: 0;
        padding: 0;
        color: #024d4d;
    }

    /* ===================== NAVBAR ===================== */
    .nav {
        position: relative;
        z-index: 2;
        padding: 20px 50px;
        text-align: right;
        background: rgba(0,120,120,0.65);
    }

    .nav a {
        color: white;
        text-decoration: none;
        margin-left: 25px;
        font-size: 16px;
        transition: 0.3s;
    }

    .nav a:hover,
    .nav .active {
        color: #d0ffff;
        text-decoration: underline;
    }

    /* ===================== PAGE HEADER ===================== */
    header {
        background: rgba(0,120,120,0.7);
        color: white;
        text-align: center;
        padding: 25px 0;
        font-size: 26px;
        margin-top: 0;
        font-weight: bold;
    }

    /* ===================== TABLE Hasil Data ===================== */
    table {
        width: 60%;
        margin: 40px auto;
        border-collapse: collapse;
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    th {
        background-color: #00b3a0;
        color: white;
        padding: 12px;
        text-align: center;
        font-size: 16px;
    }

    td {
        padding: 12px 16px;
        border-bottom: 1px solid #e1e1e1;
        font-size: 15px;
    }

    tr:hover {
        background-color: #f7ffff;
    }

    /* ===================== BUTTON ===================== */
    .btn {
        display: block;
        width: 200px;
        margin: 25px auto;
        padding: 12px;
        background-color: #009d8b;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-weight: bold;
        text-align: center;
        transition: 0.3s;
    }

    .btn:hover {
        background-color: #007d6e;
    }

    /* ===================== FOOTER ===================== */
    footer {
        margin-top: 60px;
        background: #008a8a;
        color: white;
        text-align: center;
        padding: 12px 0;
        font-size: 15px;
    }
</style>
</head>

<body>

<!-- NAV -->
<nav class="nav">
    <a href="HOME.HTML">Home</a>
    <a href="PDFTRN.HTML">Pendaftaran</a>
    <a href="SARPRAS.HTML">Sarana & Prasarana</a>
    <a class="active" href="JATDOK.HTML">Jadwal Dokter</a>
</nav>

<!-- HEADER -->
<header>
    DATA PASIEN MASUK
</header>

<!-- TABLE DATA -->
<table>
    <tr><th>FORMULIR PASIEN</th><th>DATA PASIEN</th></tr>
    <tr><td>No. Rekam Medis</td><td><?php echo $no_rm; ?></td></tr>
    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
    <tr><td>No. BPJS</td><td><?php echo $no_bpjs; ?></td></tr>
    <tr><td>Penanggung Jawab</td><td><?php echo $penanggung; ?></td></tr>
    <tr><td>Pemeriksaan Awal</td><td><?php echo $pemeriksaan; ?></td></tr>
    <tr><td>Anamnesa</td><td><?php echo $anamnesa; ?></td></tr>
    <tr><td>Pembayaran</td><td><?php echo $pembayaran; ?></td></tr>
</table>

<!-- BUTTON -->
<a href="PDFTRN.HTML" class="btn">Kembali ke Form</a>

<!-- FOOTER -->
<footer>
    SISTEM PENDAFTARAN ONLINE | Rumah Sakit Cakrawala Baru
</footer>

</body>
</html>
