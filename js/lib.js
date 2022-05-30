function showHint(str) {
    
    var file = document.getElementById('modal-input');
    file.value=str;
 
    var count = $('#modal-input').val().length;
    $('#modal-input').css("width", "calc("+ count +" * 0.85em)");
        // return;
}


$(document).ready(function(){
    var count = $('#file-row').val().length;
    $('#file-row').css("width", "calc("+ count +" * 0.85em)");

})
