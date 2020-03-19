    <div class="card">
        <h5 class="card-header"><i class="fas fa-smile-beam fa-lg text-secondary mr-3"></i>Selamat Datang <?= $this->session->userdata('username'); ?></h5>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-6">
                    <a href="<?= base_url('admin/konsultasi'); ?>" class="card-link text-dark">
                        <div class="card border-left-secondary bg-light">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h6 class="m-0">Konsultasi Terbaru</h6>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end align-items-center text-secondary">
                                        <h4 class="m-0 mr-3"><?= $konsultasi_terbaru; ?></h3>
                                            <i class="fas fa-comments fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="<?= base_url('hamapenyakit'); ?>" class="card-link text-dark">
                        <div class="card border-left-secondary bg-light">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h6 class="m-0">Jumlah Hama & Penyakit Kedelai</h6>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end align-items-center text-secondary">
                                        <h4 class="m-0 mr-3"><?= $hama_penyakit; ?></h4>
                                        <i class="fas fa-seedling fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <a href="<?= base_url('kategori'); ?>" class="card-link text-dark">
                        <div class="card border-left-secondary bg-light">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h6 class="m-0">Jumlah Kategori</h6>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end align-items-center text-secondary">
                                        <h4 class="m-0 mr-3"><?= $kategori; ?></h3>
                                            <i class="fas fa-list fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6">
                    <a href="<?= base_url('gejala'); ?>" class="card-link text-dark">
                        <div class="card border-left-secondary bg-light">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h6 class="m-0">Jumlah Gejala</h6>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end align-items-center text-secondary">
                                        <h4 class="m-0 mr-3"><?= $gejala; ?></h4>
                                        <i class="fas fa-bug fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>