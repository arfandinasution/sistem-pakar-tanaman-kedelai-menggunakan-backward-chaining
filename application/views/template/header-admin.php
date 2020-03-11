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
    <div class="container-fluid">

        <div class="row">
            <div class="col-3 pt-3 border-right" style="min-height:100vh">
                <a href="<?= base_url('admin'); ?>" class="text-decoration-none text-dark">
                    <h5><i class="fas fa-fw fa-cogs mr-1"></i>Dashboard</h5>
                </a>
                <hr class="mb-0 mt-4">
                <ul class="list-group list-group-flush">
                    <a href="<?= base_url('admin/konsultasi'); ?>" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-comments mr-1"></i>Data Konsultasi</a>
                    <a href="<?= base_url('admin/hama'); ?>" class="list-group-item list-group-item-action"><i class="fas fa-fw fa-seedling mr-1"></i>Data Hama Kedelai</a>
                    <a href="<?= base_url('autentikasi/keluar'); ?>" class="list-group-item list-group-item-action mt-5"><i class="fas fa-fw fa-sign-out-alt mr-1"></i>Keluar</a>
                </ul>
            </div>
            <div class="col-9 py-3">