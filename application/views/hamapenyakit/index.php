<?php if ($this->session->flashdata('alert')) : ?>
    <?= $this->session->flashdata('alert'); ?>
<?php endif; ?>
<div class="card">
    <h5 class="card-header d-flex justify-content-between align-items-center">
        Hama & Penyakit Tanaman Kedelai
        <a href="<?= base_url('hamapenyakit/tambah'); ?>" class="btn btn-primary"><i class="fas fa-plus mr-1"></i>Tambah Hama & Penyakit</a>
    </h5>
    <div class="card-body">
        <form action="<?= base_url('hamapenyakit'); ?>" method="post">
            <div class="input-group mb-3">
                <input type="search" class="form-control" placeholder="Cari hama & penyakit atau kategori kerusakan pada tanaman kedelai" id="keyword" name="keyword">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-search mr-1"></i>Cari</button>
                </div>
            </div>
        </form>
        <?php if ($hama_penyakit) : ?>
            <?php foreach ($hama_penyakit as $row1) : ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h6 class="card-subtitle">Kode Hama & Penyakit</h6>
                        <p class="card-text"><?= $row1['kode']; ?></p>
                        <hr>
                        <h6 class="card-subtitle">Kategori Hama & Penyakit</h6>
                        <?php if ($row1['kode_kategori']) : ?>
                            <?php foreach ($kategori as $row2) : ?>
                                <?php if ($row1['kode_kategori'] == $row2['kode']) : ?>
                                    <p class="card-text"><?= $row2['nama_kategori']; ?></p>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p class="card-text text-danger">Tidak ada kategori.</p>
                        <?php endif; ?>
                        <hr>
                        <h6 class="card-subtitle">Nama Hama & Penyakit</h6>
                        <p class="card-text"><?= $row1['nama_hamapenyakit']; ?></p>
                        <hr>
                        <h6 class="card-subtitle">Pengendalian Hama & Penyakit</h6>
                        <p class="card-text"><?= $row1['pengendalian']; ?></p>
                        <hr>
                        <h6 class="card-subtitle">Penanggulangan Hama & Penyakit</h6>
                        <?php if ($row1['penanggulangan']) : ?>
                            <p class="card-text"><?= $row1['penanggulangan']; ?></p>
                        <?php else : ?>
                            <p class="card-text">Tidak ada.</p>
                        <?php endif; ?>
                        <hr>
                        <div class="text-right">
                            <a href="<?= base_url('hamapenyakit/edit/' . $row1['kode']); ?>" class="card-link text-black"><i class="fas fa-edit mr-1"></i>Edit</a>
                            <a href="<?= base_url('hamapenyakit/hapus/' . $row1['kode']); ?>" class="card-link text-danger"><i class="fas fa-trash mr-1"></i>Hapus</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="alert alert-info" role="alert">
                <i class="fas fa-info-circle mr-1"></i>Data hama & penyakit tidak ada.
            </div>
        <?php endif; ?>
    </div>
</div>