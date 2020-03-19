<div class="container py-3">
    <div class="card border-0 shadow">
        <h5 class="card-header bg-success text-light">Diagnosis</h5>

        <div class="card-body">
            <form action="" method="post">
                <div class="input-group">
                    <select class="custom-select" id="keyword" name="keyword">
                        <option disabled selected>Pilih Hipotesa Awal</option>
                        <?php foreach ($kategori as $row) : ?>
                            <option value="<?= $row['kode']; ?>"><?= $row['nama_kategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit"><i class="fas fa-mouse-pointer mr-1"></i>Pilih</button>
                    </div>
                </div>
                <small class="form-text text-muted">Hipotesa awal adalah kategori kerusakan awal pada tanaman kedelai kamu.</small>
            </form>

            <?php if ($gejala) : ?>
                <h5 class="mt-3 text-center"><?= $kategori2['nama_kategori']; ?></h5>
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Gejala Pada Tanaman</th>
                            <th scope="col" class="text-center">Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="<?= base_url('diagnosis/hasil'); ?>" method="post" class="mt-3">
                            <?php foreach ($gejala as $row) : ?>
                                <input type="hidden" name="<?= $row['kode']; ?>">
                                <tr>
                                    <td>
                                        Apakah <?= $row['gejala']; ?> ?
                                    </td>
                                    <td class="text-center align-middle">
                                        <input type="checkbox" style="width: 64px;" name="gejala[]" value="<?= $row['kode']; ?>">
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tr class="text-center">
                                <td colspan="2">
                                    <button type="submit" class="btn btn-success mt-3"><i class="fas fa-upload mr-1"></i>Diagnosis Gejala</button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>