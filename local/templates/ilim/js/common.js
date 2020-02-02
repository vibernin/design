$('#submit').on('click', function () {
    if($.isNumeric($('#count').val())){
        $.post(
            "/local/ajax/concrete_calculation.php",
            {
                sectionId: $('#select').val(),
                count: $('#count').val()
            },
            onAjaxSuccess
        );
        $('#error').html('');
    }
    else{
        $('#error').html('Введите цифры');
        $('#result').html('');
    }
});
function onAjaxSuccess(data){
    $('#result').html(data);
}