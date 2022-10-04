
$(document).ready(function () {
    $("#check-ajax").click(function () {
       var data_id = $(this).attr("data-id");
       var data = {id: data_id};  
     //value của id trong data sẽ được POST bên url: "?mod=order&action=update" lấy xuống và trả về.
        $.ajax({
            url: "?mod=order&action=update",
            method: "POST",
            data: data,
            dataType: "text",
            success: function(data){
                //data ở đây là kết quả trả về của json_encode bên ?mod=order&action=update
                alert(data);
            },
            error: function (xhr, ajaxOptions, thrownError){
                alert(xhr.status);
                alert(thrownError);
            }
        });

//        //get value of input
//        var num_order = $("#num_order").val();
//        var price = $("#price").text();
//        var data = {num_order: num_order, price: price};
//        //ajax
//        $.ajax({
//            url: 'process.php',
//            method: "POST",
//            data: data,
//            dataType: "text",
//            success: function (data) {
//                console.log(data);
//            }
//        });
    });
});


