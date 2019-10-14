$(function() {

    $('.editDataButton').on('click', function() {
        $('#modalTitleLabel').html('Add Mahasiswa Data');
        $('.modal-footer button[type=submit]').html('Add Data');

    });

    $('.tampilModalUbah').on('click', function() {
        
        $('#modalTitleLabel').html('Edit Mahasiswa Data');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/edit');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getedit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#name').val(data.name);
                $('#matric').val(data.matric);
                $('#email').val(data.email);
                $('#course').val(data.course);
                $('#id').val(data.id);

            }

        });

    });
});