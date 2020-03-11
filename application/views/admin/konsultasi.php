<div class="card">
    <h5 class="card-header">Konsultasi Terbaru</h5>
    <div class="card-body">
        <?php if ($konsultasi) : ?>

            <ul class="list-group list-group-flush">
                <?php foreach ($konsultasi as $row) : ?>
                    <?php if ($row['id_hama'] == '') : ?>
                        <a href="<?= base_url('admin/detailkonsultasi/' . $row['id']); ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                            <?= $row['nama']; ?>
                            <span class="badge badge-dark"><?= date('d F Y', $row['tanggal']); ?><i class="fas fa-fw fa-grip-lines-vertical"></i><?= date('H : i', $row['tanggal']); ?> WIB</span>
                        </a>
                    <?php else : ?>
                        <li class="list-group-item">
                            <div class="alert alert-info" role="alert">
                                <i class="fas fa-fw fa-info-circle mr-1"></i>Data konsultasi terbaru tidak ada.
                            </div>
                        </li>
                        <?php break; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <div class="alert alert-info" role="alert">
                <i class="fas fa-fw fa-info-circle mr-1"></i>Data konsultasi terbaru tidak ada.
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="card mt-3">
    <h5 class="card-header">Histori Konsultasi</h5>
    <div class="card-body">
        <?php if ($this->session->flashdata('alert')) : ?>
            <?= $this->session->flashdata('alert'); ?>
        <?php endif; ?>
        <?php if ($konsultasi) : ?>
            <ul class="list-group list-group-flush">
                <?php foreach ($konsultasi as $row) : ?>
                    <?php if ($row['id_hama']) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <span class="badge badge-dark"><?= date('d F Y', $row['tanggal']); ?><i class="fas fa-fw fa-grip-lines-vertical"></i><?= date('H : i', $row['tanggal']); ?> WIB</span>
                                <span class="font-weight-bolder ml-3"><?= $row['nama']; ?></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="<?= base_url('admin/detailkonsultasi/' . $row['id']); ?>" class="btn btn-info">Lihat Selengkapnya</a>
                                <a href="<?= base_url('admin/hapuskonsultasi/' . $row['id']); ?>" class="ml-3"><i class="fas fa-fw fa-times-circle text-danger fa-lg"></i></a>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <div class="alert alert-info" role="alert">
                <i class="fas fa-fw fa-info-circle mr-1"></i>Data histori konsultasi tidak ada.
            </div>
        <?php endif; ?>
    </div>
</div>