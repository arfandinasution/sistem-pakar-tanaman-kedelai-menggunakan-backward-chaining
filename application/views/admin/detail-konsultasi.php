<div class="card">
    <h5 class="card-header d-flex align-items-center">
        <a href="<?= base_url('admin/konsultasi'); ?>" class="btn btn-secondary rounded-circle mr-3"><i class="fas fa-arrow-left"></i></a>
        Detail Konsultasi
    </h5>

    <div class="card-body">
        <?php if ($konsultasi_histori) : ?>
            <div class="row">
                <div class="col-4">
                    <img src="<?= base_url('assets/img/konsultasi/' . $konsultasi_histori['gambar']); ?>" class="card-img">
                </div>
                <div class="col-8">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="font-weight-bolder">ID Konsultasi</span>
                            <?= $konsultasi_histori['id']; ?>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="font-weight-bolder">Nama Lengkap</span>
                            <?= $konsultasi_histori['nama']; ?>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="font-weight-bolder">Hasil</span>
                            <?= $konsultasi_histori['nama_hamapenyakit']; ?>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="font-weight-bolder">Tanggal Konsultasi</span>
                            <?= date('d / m / Y', $konsultasi_histori['waktu']); ?>
                        </li>
                        <a href="<?= base_url('admin/hapuskonsultasi/' . $konsultasi_histori['id']); ?>" class="list-group-item list-group-item-action text-danger">
                            <i class="fas fa-trash mr-1"></i>Hapus
                        </a>
                    </ul>
                </div>
            </div>
        <?php else : ?>
            <div class="card">
                <img src="<?= base_url('assets/img/konsultasi/' . $konsultasi_terbaru['gambar']); ?>" class="card-img-top">
                <form action="" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kode_hamapenyakit">Pilih Hama</label>
                            <select class="form-control" id="kode_hamapenyakit" name="kode_hamapenyakit">
                                <?php foreach ($hama_penyakit as $row) : ?>
                                    <option value="<?= $row['kode']; ?>"><?= $row['nama_hamapenyakit']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="<?= base_url('admin/konsultasi'); ?>" class="btn btn-secondary"><i class="fas fa-undo mr-1"></i>Kembali</a>
                        <button type="submit" class="btn btn-success"><i class="fas fa-upload mr-1"></i>Kirim</button>
                    </div>
                </form>
            </div>
        <?php endif; ?>
    </div>
</div>