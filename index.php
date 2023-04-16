<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <nav class='sidebar'>
        <h2>Coding</h2>
        <div class='sidebar-nav'>
            <div class='sideitem'>
                <ul>
                    <li id='dashboard'><a href="">Dashboard</a></li>
                    <li><a href="form-daftar.php">Pendaftaran</a></li>
                    <li><a href="list-siswa.php">List siswa</a></li>
                    <li><a href="">Pengaturan</a></li>
                </ul>
            </div>
            <div class='logout'>
                <a href="">Keluar</a>
            </div>
        </div>
    </nav>
    <section class="page">
        <div class='searchbar'>
            <div class='input'>
                <input id='search' type="text" placeholder='Search'>
                <p>Senin, 6 Maret 2023</p>
            </div>
            <div class='card-list'>
                <p>list</p>
                <button type='button'>card</button>
            </div>
        </div>
       <div class='page-expo'>
        <div class='exposure'>
                <div>
                    <h1>SMK Coding</h1>
                    <p>117 Pendaftar, gabung sekarang bersama mereka!</p>
                </div>
                <div class='expo1'>
                    <div>
                        <h1>94</h1>
                        <p>terdaftar</p>
                    </div>
                    <div>
                        <h1>23</h1>
                        <p>dalam proses</p>
                    </div>
                </div>
        </div>
        <div class='table'>
            <div class='title'>
                <div>Name</div>
                <div>Alamat</div>
                <div>Jenis Kelamin</div>
                <div>Agama</div>
                <div>Sekolah</div>
            </div>
            <div class='content'>
                <div>calvin</div>
                <div>solo</div>
                <div>laki - laki</div>
                <div>katolik</div>
                <div>SMPN 1 Solo</div>
            </div>
            <div class='content'>
                <div>kevin</div>
                <div>pantai mentari</div>
                <div>laki - laki</div>
                <div>kristen</div>
                <div>SMPN 1 Solo</div>
            </div>
            <div class='content'>
                <div>cakno</div>
                <div>keputih</div>
                <div>laki - laki</div>
                <div>islam</div>
                <div>SMPN 1 Solo</div>
            </div>
            <div class='content'>
                <div>deekuh</div>
                <div>kupang</div>
                <div>laki - laki</div>
                <div>katolik</div>
                <div>SMPN 1 Solo</div>
            </div>
        </div>
       </div>
       <div class='bottom'>
        <div class='left'>
            <p>Form Pendaftaran</p>
            <div class='left-box'>
                <a href="form-daftar.php">Klik disini</a>
            </div>
        </div>
        <div class='right'>
            <p>Lihat Siswa Pendaftar</p>
            <div class='right-box'><a href="list-siswa.php">Klik disini</a></div>
        </div>
       </div>
        <!-- <nav>
            <ul>
                <li><a href="form-daftar.php">Daftar Baru</a></li>
                <li><a href="list-siswa.php">Pendaftar</a></li>
            </ul>
        </nav> -->
        <!-- <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran siswa baru berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
                }
            ?>
        </p>
        <?php endif; ?> -->
    </section>
</body>
</html>