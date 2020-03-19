<?php if ($this->session->flashdata('alert')) : ?>
    <?= $this->session->flashdata('alert'); ?>
<?php endif; ?>
<div class="card">
    <h5 class="card-header d-flex justify-content-between align-items-center">
        <a href="<?= base_url('gejala'); ?>" class="btn btn-secondary rounded-circle mr-3"><i class="fas fa-arrow-left"></i></a>
        Detail Gejala Hama & Penyakit <?= $hama_penyakit['nama_hamapenyakit']; ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambahGejala"><i class="fas fa-plus mr-1"></i>Tambah Gejala <?= $hama_penyakit['nama_hamapenyakit']; ?></button>
    </h5>
    <div class="card-body">
        <?php if ($gejala) : ?>
            <?php foreach ($gejala as $row) : ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="card-subtitle">Kode Gejala</h6>
                        <p class="card-text"><?= $row['kode']; ?></p>
                        <h6 class="card-subtitle">Gejala</h6>
                        <p class="card-text"><?= $row['gejala']; ?></p>
                        <hr>
                        <div class="text-right">
                            <a href="<?= base_url('gejala/edit/' . $row['kode']); ?>" class="card-link buttonEdit" data-toggle="modal" data-target="#modalEditGejala" data-id="<?= $row['kode']; ?>" data-gejala="<?= $row['gejala']; ?>"><i class="fas fa-edit mr-1"></i>Edit</a>
                            <a href="<?= base_url('gejala/hapus/' . $hama_penyakit['kode'] . '/' . $row['kode']); ?>" class="card-link text-danger"><i class="fas fa-trash mr-1"></i>Hapus</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="alert alert-info" role="alert">
                <i class="fas fa-info-circle mr-1"></i>Data gejala hama & penyakit <?= $hama_penyakit['nama_hamapenyakit']; ?> tidak ada.
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Modal Tambah Gejala-->
<div class="modal fade" id="modalTambahGejala" tabindex="-1" role="dialog" aria-labelledby="modalTambahGejalaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahGejalaLabel">Form Tambah Gejala Hama & Penyakit <?= $hama_penyakit['nama_hamapenyakit']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('gejala/tambah/' . $hama_penyakit['kode']); ?>" method="post">
                <input type="hidden" name="kode_hamapenyakit" value="<?= $hama_penyakit['kode']; ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode">Kode Gejala Hama & Penyakit</label>
                        <input type="text" class="form-control" id="kode" name="kode">
                    </div>
                    <div class="form-group">
                        <label for="gejala">Gejala Hama & Penyakit</label>
                        <input type="text" class="form-control" id="gejala" name="gejala">
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

<!-- Modal Edit Gejala-->
<div class="modal fade" id="modalEditGejala" tabindex="-1" role="dialog" aria-labelledby="modalEditGejalaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditGejalaLabel">Form Edit Gejala Hama & Penyakit <?= $hama_penyakit['nama_hamapenyakit']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('gejala/edit/' . $hama_penyakit['kode']); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode">Kode Gejala Hama & Penyakit</label>
                        <input type="text" readonly class="form-control kode" id="kode" name="kode">
                    </div>
                    <div class="form-group">
                        <label for="gejala">Gejala Hama & Penyakit</label>
                        <input type="text" class="form-control gejala" id="gejala" name="gejala">
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