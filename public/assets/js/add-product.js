$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#form").on('submit',function (e) {
        e.preventDefault();
        let formData = new FormData();
        let product_name = $("#product_name").val();
        let product_sku = $("#product_sku").val();
        let product_quantity = $("#product_quantity").val();
        let product_price = $("#product_price").val();
        let product_description = $("#product_description").val();
        let TotalImages = $('#imageFile')[0].files.length;  //Total Images
        let images = $('#imageFile')[0];
        for (let i = 0; i < TotalImages; i++) {
            formData.append('images' + i, images.files[i]);
        }
        formData.append('TotalImages', TotalImages);
        formData.append('product_name',product_name);
        formData.append('product_sku',product_sku);
        formData.append('product_quantity',product_quantity);
        formData.append('product_price',product_price);
        formData.append('product_description',product_description);
        let url = $(this).attr('action');
        let method = $(this).attr('method');

        $.ajax({
            url:url,
            type:method,
            data:formData,
            dataType:"json",
            processData: false,
            contentType: false,
            success:function (data) {
                alert('successfully created product');
                /* window.location.reload();*/
            }
        });
    });
});
