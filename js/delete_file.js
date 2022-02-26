// $('#delete-modal').click(function(){
    
// var file = $('#file-row').val();
// // var id = $(this).getElementById('file-row');
// var str = 'Are you sure you want to delete file('+ file + ')?';
// $('#modal-bdy').html(str);
// })
$(function(){
    $('.form').on('submit', function(){
        $('#delete').modal('show');
        return false;
    })
})