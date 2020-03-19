<div class="card">
    <h5 class="card-header">Konsultasi Terbaru</h5>
    <div class="card-body">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th scope="col">ID Konsultasi</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tanggal Konsultasi</th>
                    <th class="text-center" scope="col">Tindakan</th>
                </tr>
            </thead>

            <tbody>
                <?php if ($konsultasi_terbaru) : ?>
                    <?php foreach ($konsultasi_terbaru as $row) : ?>
                        <tr>
                            <td class="align-middle"><?= $row['id']; ?></td>
                            <td class="align-middle"><?= $row['nama']; ?></td>
                            <td class="align-middle"><?= date('d / m / Y', $row['waktu']); ?></td>
                            <td class="align-middle text-center">
                                <a href="<?= base_url('admin/detailkonsultasi/' . $row['id']); ?>" class="btn btn-primary">Lihat Konsultasi<i class="fas fa-chevron-right ml-1"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td class="align-middle" colspan="4">
                            <div class="alert alert-info mb-0" role="alert">
                                <i class="fas fa-info-circle mr-1"></i>Data konsultasi terbaru tidak ada.
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="card mt-3">
    <h5 class="card-header">Histori Konsultasi</h5>
    <div class="card-body">
        <?php if ($this->session->flashdata('alert')) : ?>
            <?= $this->session->flashdata('alert'); ?>
        <?php endif; ?>
        <table class="table mb-0">
            <thead>
                <tr>
                    <th scope="col">ID Konsultasi</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tanggal Konsultasi</th>
                    <th scope="col">Hasil</th>
                    <th class="text-center" scope="col">Tindakan</th>
                </tr>
            </thead>

            <tbody>
                <?php if ($konsultasi_histori) : ?>
                    <?php foreach ($konsultasi_histori as $row) : ?>
                        <?php if ($row['kode_hamapenyakit']) : ?>
                            <tr>
                                <td class="align-middle"><?= $row['id']; ?></td>
                                <td class="align-middle"><?= $row['nama']; ?></td>
                                <td class="align-middle"><?= date('d / m / Y', $row['waktu']); ?></td>
                                <td class="align-middle"><?= $row['nama_hamapenyakit']; ?></td>
                                <td class="align-middle text-center">
                                    <a href="<?= base_url('admin/detailkonsultasi/' . $row['id']); ?>" class="btn btn-primary ">Detail</a>
                                    <a href="<?= base_url('admin/hapuskonsultasi/' . $row['id']); ?>" class="btn btn-danger ">Hapus</a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td class="align-middle" colspan="5">
                            <div class="alert alert-info mb-0" role="alert">
                                <i class="fas fa-info-circle mr-1"></i>Data histori konsultasi tidak ada.
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>