</div>
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url('vendors/jquery/jquery-3.4.1.slim.min.js'); ?>"></script>
<script src="<?= base_url('vendors/popper/popper.min.js'); ?>"></script>
<script src="<?= base_url('vendors/bootstrap/js/bootstrap.min.js'); ?>"></script>

<!-- Tiny MCE Editor -->
<script src="<?= base_url('vendors/tinymce/tinymce.min.js'); ?>"></script>
<script>
    tinymce.init({
        selector: '#textarea1'
    });
    tinymce.init({
        selector: '#textarea2'
    });
</script>

<!-- Custom JavaScript -->
<script src="<?= base_url('assets/js/custom.js'); ?>"></script>
</body>

</html>