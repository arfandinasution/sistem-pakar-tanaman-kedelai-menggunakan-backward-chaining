$('.custom-file-input').on('change', function () {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});

$('.buttonEdit').on('click', function () {
    $('.kode').val($(this).data('id'));
    $('.gejala').val($(this).data('gejala'));
});