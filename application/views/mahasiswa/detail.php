<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa - CI APP</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Detail Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                        <p class="card-text"><?= $mahasiswa['tanggal_lahir']; ?></p>
                        <p class="card-text"><?= $mahasiswa['alamat']; ?></p>
                        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>