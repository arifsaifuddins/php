$(function () {

  $('.add').on('click', function () {

    $('.label').html('Add Mahasiswa');
    $('.toggle').html('Add New');
    $('#nama').val('');
    $('#jurusan').val('');
    $('#nrp').val('');
    $('#email').val('');
    $('#usia').val('');
    $('#id').val('');
  });

  $('.edit').on('click', function () {

    $('.label').html('Edit Mahasiswa');
    $('.toggle').html('Update');
    $('.modal-body form').attr('action', 'http://localhost/php/mvc/public/mahasiswa/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/php/mvc/public/mahasiswa/getUbah',
      method: 'POST',
      dataType: 'json',
      data: {
        id: id
      },
      success: function (data) {

        $('#nama').val(data.nama);
        $('#jurusan').val(data.jurusan);
        $('#nrp').val(data.nrp);
        $('#email').val(data.email);
        $('#usia').val(data.usia);
        $('#id').val(data.id);
      }
    });
  });
});