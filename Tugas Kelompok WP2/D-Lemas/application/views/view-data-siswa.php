<<html>
<head>
    <meta charset="utf-8">
    <title>Data Siswa SMK Pacakarya Tangerang</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">>
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>OUTPUT DATA SISWA</h1>
                <h3>SMK PANCAKARYA TANGERANG</h3>
            </hgroup>
            <div class="clear"></div>
        </header>
<body>
    <center>
            <table>
            <tr>
                <th colspan="3">
                    Data Siswa SMK Pacakarya Tangerang
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>NIS Siswa</th>
                <td>:</td>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <?= $tanggal; ?>
                </td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>
                    <?= $tempat; ?>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <?= $jk; ?>
                </td>
            </tr>
            <tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
            <td colspan="3" align="center">
            <a href="<?= base_url('web'); ?>">Kembali</a>
            <form action="<?= base_url('web/about'); ?>"
             method="post">
            <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </center> 
    </body>
    <footer>
            <a>Digital Learning Management System (Di-Lemas)</a>
        </footer>
    </div>
</body>
</html>
