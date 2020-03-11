<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card border-0 shadow mt-5">
                <h5 class="card-header bg-success text-light">Masuk Sebagai Admin</h5>
                <div class="card-body">
                    <?php if ($this->session->flashdata('alert')) : ?>
                        <?= $this->session->flashdata('alert'); ?>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                            <small class="form-text text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <small class="form-text text-danger"><?= form_error('password'); ?></small>
                        </div>
                        <button type="submit" class="btn btn-success btn-block"><i class="fas fa-fw fa-sign-in-alt mr-1"></i>Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>