<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'] ?>">
                            <small class="form-text text-danger"><?= form_error('nim') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="tanggal_lahir" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $mahasiswa['tanggal_lahir'] ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal_lahir') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="tanggal_lahir" class="form-control" id="tanggal_lahir" name="alamat" value="<?= $mahasiswa['tanggal_lahir'] ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal_lahir') ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>