$(document).ready(() => {

    loadCart();
    loadWishlist();

    //button acction to add data to cart
    $('.addToCart').click(function (e) {
        e.preventDefault();
        //geting the data from the view
        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.input_qty').val();

        /*alert(product_id);
         alert(product_qty); */
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //sending to the database using ajax.
        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
            },
            success: function (response) {
                swal(response.status);
                loadCart();
                //alert(response.status);
                //console.log(response);
            }
        });

    });

    $('.addToWishlist').click(function (e) {
        e.preventDefault();
        //getting the value from the addTowishlist
        var addTowish = $(this).closest('.product_data').find('.prod_id').val();

        $.ajax({
            method: "POST",
            url: "/add-to-wishlist",
            data: {
                'addTowish': addTowish,
            },
            success: function (response) {
                swal(response.status);
                loadWishlist();
            }
        });
    });

    // add data front cart
    function loadCart() {
        $.ajax({
            method: "GET",
            url: "/load-cart-data",
            success: function (response) {
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
                // alert(response.count);
            }
        });
    }
    function loadWishlist() {
        $.ajax({
            method: "GET",
            url: "/load-wishlist-data",
            success: function (response) {
                $('.wish-count').html('');
                $('.wish-count').html(response.count);
                // alert(response.count);
            }
        });
    }
    $('.increment-btn').click(function (e) {
        e.preventDefault();
        //var inc_value=$('.input_qty').val();
        var inc_value = $(this).closest('.product_data').find('.input_qty').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10) {
            value++;
            //$('.input_qty').val(value);
            $(this).closest('.product_data').find('.input_qty').val(value);
        }
    });
    $('.decrement-btn').click(function (e) {
        e.preventDefault();
        //var dec_value=$('.input_qty').val();
        var dec_value = $(this).closest('.product_data').find('.input_qty').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            //$('.input_qty').val(value);
            $(this).closest('.product_data').find('.input_qty').val(value);
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.delete_cart_item').click(function (e) {
        e.preventDefault();
        var productId = $(this).closest('.product_data').find('.product_id').val();



        $.ajax({
            method: "POST",
            url: "delete_cart_item",
            data: {
                productId: productId,
            },
            success: function (response) {
                window.location.reload();
                //swal("",response.status,"success");
                // alert(response.status);
            }
        });

    });

    //deleting item from the wishlist
    $('.delete_wish_item').click(function (e) {
        e.preventDefault();
        var wishprod = $(this).closest('.product_data').find('.prod_id').val();

        $.ajax({
            method: "POST",
            url: "delete_wishItem",
            data: {
                wishprod: wishprod,
            },
            success: function (response) {
                window.location.reload();
                //swal("",response.status,"success");
                // alert(response.status);
            }
        });

    });

    //changing the quantity in the cart
    $('.changeQuantity').click(function (e) {
        e.preventDefault();
        var productId = $(this).closest('.product_data').find('.product_id').val();
        var quanty = $(this).closest('.product_data').find('.input_qty').val();

        /* $.ajaxSetup({
             headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
          });  */
        data = {
            'productId': productId,
            'quanty': quanty
        };

        $.ajax({
            method: 'POST',
            url: 'updataCart',
            data: data,
            /*data:{
                'productId':productId,
                'quanty':quanty,
            },*/
            success: function (response) {
                window.location.reload();
                // swal(response.status);
                //alert(response.status);
            }
        });

    });

});
