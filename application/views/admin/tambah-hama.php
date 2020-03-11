<?php if ($this->session->flashdata('alert')) : ?>
    <?= $this->session->flashdata('alert'); ?>
<?php endif ?>
<div class="card">
    <h5 class="card-header">Form Tambah Hama</h5>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group row">
                <label for="nama" class="col-3 col-form-label font-weight-bolder">Nama Hama</label>
                <div class="col-9">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="textarea1" class="col-3 col-form-label font-weight-bolder">Pengendalian Hama</label>
                <div class="col-9">
                    <textarea class="form-control" id="textarea1" name="pengendalian" rows="15">
                        <?= set_value('pengendalian'); ?>
                    </textarea>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="textarea2" class="col-3 col-form-label font-weight-bolder">Pengendalian Hama</label>
                <div class="col-9">
                    <textarea class="form-control" id="textarea2" name="penanggulangan" rows="15">
                        <?= set_value('penanggulangan'); ?>
                    </textarea>
                </div>
            </div>
            <hr>
            <div class="text-right">
                <a href="<?= base_url('admin/hama'); ?>" class="btn btn-secondary"><i class="fas fa-fw fa-undo mr-1"></i>Kembali</a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-save mr-1"></i>Simpan</button>
            </div>
        </form>
    </div>
</div>