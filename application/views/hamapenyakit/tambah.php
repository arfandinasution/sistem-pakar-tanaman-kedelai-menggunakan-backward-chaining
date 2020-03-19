<?php if ($this->session->flashdata('alert')) : ?>
    <?= $this->session->flashdata('alert'); ?>
<?php endif; ?>
<div class="card">
    <h5 class="card-header d-flex align-items-center">
        <a href="<?= base_url('hamapenyakit'); ?>" class="btn btn-secondary rounded-circle mr-3"><i class="fas fa-arrow-left"></i></a>
        Form Tambah Hama & Penyakit Tanaman Kedelai
    </h5>
    <form action="<?= base_url('hamapenyakit/tambah'); ?>" method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="kode_kategori">Kategori Kerusakan Tanaman Kedelai</label>
                <select class="form-control" id="kode_kategori" name="kode_kategori">
                    <?php foreach ($kategori as $row) : ?>
                        <option value="<?= $row['kode']; ?>"><?= $row['nama_kategori']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="kode">Kode Hama & Penyakit</label>
                <input type="text" class="form-control" id="kode" name="kode">
                <small class="form-text text-danger"><?= form_error('kode'); ?></small>
            </div>
            <div class="form-group">
                <label for="nama_hamapenyakit">Nama Hama & Penyakit</label>
                <input type="text" class="form-control" id="nama_hamapenyakit" name="nama_hamapenyakit">
                <small class="form-text text-danger"><?= form_error('nama_hamapenyakit'); ?></small>
            </div>
            <div class="form-group">
                <label for="pengendalian">Pengendalian Hama & Penyakit</label>
                <textarea class="form-control" id="pengendalian" name="pengendalian" rows="8"></textarea>
            </div>
            <div class="form-group">
                <label for="penanggulangan">Penanggulangan Hama & Penyakit</label>
                <textarea class="form-control" id="penanggulangan" name="penanggulangan" rows="8"></textarea>
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="<?= base_url('admin/hamapenyakit'); ?>" class="btn btn-secondary"><i class="fas fa-undo mr-1"></i>Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i>Simpan</button>
        </div>
    </form>
</div>