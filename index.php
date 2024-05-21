<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMAN 1 MAGETAN</title>
    <link rel="stylesheet" a href="vendor/css/bootstrap-grid.rtl.css.map">
    <script src="vendor/js/bootstrap.bundle.js"></script>
</head>

<body>
    <header>
         <h3>Pendaftaran Siswa Baru</h3>
         <h1>Politeknik Madiun</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran siswa baru berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
                }
            ?>
        </p>
    <?php endif; ?>
    </body>
</html>