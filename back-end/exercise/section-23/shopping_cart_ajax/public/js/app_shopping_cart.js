$(document).ready(function () {
    $("#num_order").change(function(){
        var num_order = $("#num_order").val();
        var pro_price = $("#pro_price").text();
        
        var data = {num_order: num_order, pro_price: pro_price};
        $.ajax({
            url: "process_cart.php",
            method: "POST",
            data: data,
            dataType: 'text',
            success: function(data){
                console.log(data);
                $("#sub_total").text(data);
            },
            error: function (xhr, ajaxOprions, throwError){
                alert(xhr.status);
                alert(throwError);
            }
        });
    });
});

