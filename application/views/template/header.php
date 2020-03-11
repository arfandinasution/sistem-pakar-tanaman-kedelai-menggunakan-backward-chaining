<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('vendors/bootstrap/css/bootstrap.min.css'); ?>">

    <!-- Fontawesome -->
    <link rel=" stylesheet" href="<?= base_url('vendors/fontawesome/css/all.css'); ?>">

    <title><?= $judul; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                <i class="fas fa-fw fa-seedling mr-1"></i>Sistem Pakar Tanaman Kedelai
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <?php if ($judul == 'Halaman Beranda') : ?>
                            <a class="nav-link active" href="<?= base_url(); ?>">
                                <i class="fas fa-fw fa-home mr-1"></i>Beranda
                            </a>
                        <?php else : ?>
                            <a class="nav-link" href="<?= base_url(); ?>">
                                <i class="fas fa-fw fa-home mr-1"></i>Beranda
                            </a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <?php if ($judul == 'Halaman Konsultasi') : ?>
                            <a class="nav-link active" href="<?= base_url('konsultasi'); ?>">
                                <i class="fas fa-fw fa-headset mr-1"></i>Konsultasi
                            </a>
                        <?php else : ?>
                            <a class="nav-link" href="<?= base_url('konsultasi'); ?>">
                                <i class="fas fa-fw fa-headset mr-1"></i>Konsultasi
                            </a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <?php if ($judul == 'Halaman Diagnosis') : ?>
                            <a class="nav-link active" href="<?= base_url('diagnosis'); ?>">
                                <i class="fas fa-fw fa-diagnoses mr-1"></i>Diagnosis
                            </a>
                        <?php else : ?>
                            <a class="nav-link" href="<?= base_url('diagnosis'); ?>">
                                <i class="fas fa-fw fa-diagnoses mr-1"></i>Diagnosis
                            </a>
                        <?php endif; ?>
                    </li>
                </ul>
                <a href="<?= base_url('autentikasi/masuk'); ?>" class="btn btn-outline-light rounded-pill"><i class="fas fa-fw fa-sign-in-alt mr-1"></i>Masuk Sebagai Admin</a>
            </div>
        </div>
    </nav>