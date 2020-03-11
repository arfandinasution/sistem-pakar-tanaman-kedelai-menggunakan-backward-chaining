<div class="card">
    <h5 class="card-header">Hama <?= $hama['nama']; ?></h5>
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <h5 class="card-title mb-3">Pengendalian</h6>
                    <p class="card-text"><?= $hama['pengendalian']; ?></p>
            </div>
            <div class="col-6">
                <h5 class="card-title mb-3">Penanggulangan</h5>
                <p class="card-text"><?= $hama['penanggulangan']; ?></p>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="<?= base_url('admin/hama'); ?>" class="btn btn-secondary"><i class="fas fa-fw fa-undo mr-1"></i>Kembali</a>
        </div>
    </div>
</div>