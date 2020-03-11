<?php if ($this->session->flashdata('alert')) : ?>
    <?= $this->session->flashdata('alert'); ?>
<?php endif ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Hama Tanaman Kedelai</h5>
        <a href="<?= base_url('admin/tambahhama'); ?>" class="btn btn-outline-secondary"><i class="fas fa-fw fa-plus mr-1"></i>Tambah Hama</a>
    </div>
    <div class="card-body">
        <ul class="list-group">
            <?php if ($hama) : ?>
                <?php foreach ($hama as $row) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span class="font-weight-bolder"><?= $row['nama']; ?></span>
                        <div>
                            <a href="<?= base_url('admin/detailhama/' . $row['id']); ?>" class="btn btn-info">Lihat</a>
                            <a href="<?= base_url('admin/edithama/' . $row['id']); ?>" class="btn btn-warning">Edit</a>
                            <a href="<?= base_url('admin/hapushama/' . $row['id']); ?>" class="btn btn-danger">Hapus</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="alert alert-info" role="alert">
                    <i class="fas fa-fw fa-info-circle mr-1"></i>Data hama tidak tersedia.
                </div>
            <?php endif; ?>
        </ul>
    </div>
</div>