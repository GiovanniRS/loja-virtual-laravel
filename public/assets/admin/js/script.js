$(document).ready(function() {
    $('.delete-product-image').click(function() {
        var cond = confirm('Tem certeza que deseja deletar esta imagem?');
        if (cond) {
            id = $(this).attr('rel');
            $.ajax({
                url: $('#deleteProductImage' + id).attr('action'),
                type: "post",
                data: $('#deleteProductImage' + id).serialize(),
                dataType: 'json',
                success: function(response){
                    if (response.success == true) {
                        $('#divProductImage' + id).remove();
                        $('.alertProductImage').removeClass('d-none');
                        $('.alertProductImage').addClass('alert-success');
                        $('.alertProductImage').html('<p>' + response.message + '</p>');
                    } else {
                        $('.alertProductImage').removeClass('d-none');
                        $('.alertProductImage').addClass('alert-warning');
                        $('.alertProductImage').html('<p>' + response.message + '</p>');
                    }
                }
            })
        }
    });
});