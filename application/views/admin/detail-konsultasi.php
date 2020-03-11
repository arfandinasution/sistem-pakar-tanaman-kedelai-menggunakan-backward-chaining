<div class="container py-5">
    <div class="card border-0 shadow">
        <h5 class="card-header bg-success text-light">Detail Konsultasi</h5>

        <div class="card-body">
            <div class="card">
                <img src="<?= base_url('assets/img/konsultasi/' . $konsultasi['gambar']); ?>" class="card-img-top">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="hama">Pilih Hama</label>
                            <select class="form-control" id="hama" name="hama">
                                <?php foreach ($hama as $row) : ?>
                                    <option value="<?= $row['id']; ?>"><?= $row['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success"><i class="fas fa-fw fa-paper-plane"></i>Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>