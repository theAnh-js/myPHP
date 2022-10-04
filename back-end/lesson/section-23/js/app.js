
$(document).ready(function () {
    $("#click_me").click(function () {
        alert("clicked!");
    });


    $("#num_order").change(function () {

        //get value of price and quantity
        var price = $("#price").text();
        var num_order = $("#num_order").val();
        
        var data = {price: price, num_order: num_order};
        
        $.ajax({
            url: "process.php",
            method: "POST",
            data: data,
            dataType: "json",
            
            success: function(data){
                //data ở đây là kết quả trả về của json_encode bên process.php
//               $("#total").text(data.total);
               //hoặc cũng có thể dùng .html để trả về 1 str html 
               $("#total").html("<strong>" + data.total + "</strong>");
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


