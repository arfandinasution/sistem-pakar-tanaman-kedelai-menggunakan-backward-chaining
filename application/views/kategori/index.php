<?php if ($this->session->flashdata('alert')) : ?>
    <?= $this->session->flashdata('alert'); ?>
<?php endif; ?>
<div class="card">
    <h5 class="card-header d-flex justify-content-between align-items-center">
        Kategori Hama & Penyakit Tanaman Kedelai
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalKategori"><i class="fas fa-plus mr-1"></i>Tambah Kategori</button>
    </h5>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <?php foreach ($kategori as $row) : ?>
                <a href="<?= base_url('kategori/detail/' . $row['kode']); ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    <div>
                        <span class="badge badge-secondary"><?= $row['kode']; ?></span>
                        <?= $row['nama_kategori']; ?>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </a>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<!-- Modal Kategori -->
<div class="modal fade" id="modalKategori" tabindex="-1" role="dialog" aria-labelledby="modalKategoriLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalKategoriLabel">Form Tambah Kategori Hama & Penyakit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('kategori/tambah'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode_kategori">Kode Kategori Hama & Penyakit</label>
                        <input type="text" class="form-control" id="kode_kategori" name="kode_kategori">
                    </div>
                    <div class="form-group">
                        <label for="nama_kategori">Nama Kategori Hama & Penyakit</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-1"></i>Batal</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>