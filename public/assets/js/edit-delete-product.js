$(document).ready(function() {
    $('.delete_btn').click(function(e) {
        e.preventDefault();
        var pid = $(this).attr('data-id');
        var path = $(this).attr('data-path');
        $.ajax({
            type: "GET",
            url: path + "/" + pid,
            success: function(data) {
                if (data) {
                    alert('delete product');
                    $('#del_' + pid).closest('tr').remove();
                } else {
                    alert('product is not delete');
                }
            }
        });
    });
    $('.openModal').click(function () {
        var product_id = $(this).attr('data-id');

        $.ajax({
           type:'GET',
           'url':'/openModal/'+product_id,
           dataType:'json',
           success:function (data) {

           }
        });

    });
});
