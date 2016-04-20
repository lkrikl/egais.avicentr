//function show()  
//        {  
//            $.ajax({  
//                url: "/order/reloadorder",  
//                cache: false,  
//                success: function(data){  
//                    var container = $("#reloadtest")
//                    container.text('');
//                    container.append(data);  
//                    }  
//            });  
//        }  

$(document).ready(function () {
//    show();  
//    setInterval('show()',1000);  
    
    $('#block-cart > p').toggle(
        function () {
            $('#block-cart > div').show();
        },
        function () {
            $('#block-cart > div').hide();
        }
    );
    
    $('#block-cart > p').toggle(
        function () {
            $('#block-cart > div').show();
        },
        function () {
            $('#block-cart > div').hide();
        }
    );

    $('#ip').click(function() {
        $("#hardware_ip").show();
        $("#type_organization").hide();
        $("#refresh").show();
    });
    $('#obshepit').click(function() {
        $("#hardware_obshepit").show();
        $("#type_organization").hide();
        $("#refresh").show();
    });
    $('#one').click(function() {
        $("#hardware_one").show();
        $("#type_organization").hide();
        $("#refresh").show();
    });
    $('#lan').click(function() {
        $("#hardware_lan").show();
        $("#type_organization").hide();
        $("#refresh").show();
    });




    $('#tablet_android').click(function() {
        $("#software_android_ip").hide();
        $("#hardware_ip").hide();
        $("#result_ip_android_ip").show();
        $("#form_order_result_ip_android_ip").show();
        $("#solution_title").hide();
        $("#add_form_order_result_ip_android_ip").show();
        $("#add_form_one_software_atol_tablet_scanner_result").hide();
    });
    $('#tablet_win10').click(function() {
        $("#software_android_ip").hide();
        $("#hardware_ip").hide();
        $("#result_ip_win10").show();
        $("#solution_title").hide();
    });
    $('#pc_win7_ip').click(function() {
        $("#software_android_ip").hide();
        $("#hardware_ip").hide();
        $("#result_ip_win7").show();
        $("#solution_title").hide();
    });
    $('#shtrih_ip').click(function() {
        $("#software_android_ip").hide();
        $("#hardware_ip").hide();
        $("#result_ip_shtrih").show();
        $("#solution_title").hide();
    });



    $('#one_tablet_android').click(function() {
        $("#software_android_one").hide();
        $("#one_software_atol_tablet_scanner_result").show();
        $("#solution_title").hide();
        $("#form_order_result_ip_android_ip").show();
        $("#hardware_one").hide();
        $("#add_form_order_result_ip_android_ip").hide();
        $("#add_form_one_software_atol_tablet_scanner_result").show();
    });
    $('#one_tablet_win10').click(function() {
        $("#software_android_one").hide();
        $("#one_software_tablet_win10_result").show();
        $("#form_order_result_ip_android_ip").show();
        $("#add_rorm_one_software_tablet_win10_result").show();
        $("#solution_title").hide();
        $("#hardware_one").hide();
    });
    $('#one_pc_win7_ip').click(function() {
        $("#hardware_one").hide();
        $("#software_win7_one").show();
    });
    $('#one_software_win7_shtrih').click(function() {
        $("#software_android_one").hide();
        $("#one_software_win7_shtrih_result").show();
        $("#solution_title").hide();
        $("#software_win7_one").hide();
    });
    $('#one_software_win7_frontol5').click(function() {
        $("#one_software_win7_frontol5_result").show();
        $("#solution_title").hide();
        $("#software_win7_one").hide();
    });
    $('#one_software_win7_frontolxpos').click(function() {
        $("#one_software_win7_frontolxpos_result").show();
        $("#solution_title").hide();
        $("#software_win7_one").hide();
    });
    $('#one_software_win7_1c8base').click(function() {
        $("#one_software_win7_1c8base_result").show();
        $("#solution_title").hide();
        $("#software_win7_one").hide();
    });
    $('#lan_tablet_win10').click(function() {
        $("#lan_software_tablet_win10_result").show();
        $("#solution_title").hide();
        $("#hardware_lan").hide();
    });
    $('#lan_pc_win7').click(function() {
        $("#software_win7_lan").show();
        $("#hardware_lan").hide();
    });

    $('#lan_software_win7_shtrih').click(function() {
        $("#lan_software_win7_shtrih_result").show();
        $("#solution_title").hide();
        $("#software_win7_lan").hide();
    });
    $('#lan_software_win7_frontol5').click(function() {
        $("#lan_software_win7_frontol5_result").show();
        $("#solution_title").hide();
        $("#software_win7_lan").hide();
    });
    $('#lan_software_win7_frontolxpos').click(function() {
        $("#lan_software_win7_frontolxpos_result").show();
        $("#solution_title").hide();
        $("#software_win7_lan").hide();
    });
    $('#lan_software_win7_1c8base').click(function() {
        $("#lan_software_win7_1c8base_result").show();
        $("#solution_title").hide();
        $("#software_win7_lan").hide();
    });

    $('#tablet_android_obshepit').click(function() {
        $("#result_ip_android_obhepit").show();
        $("#solution_title").hide();
        $("#hardware_obshepit").hide();
    });
    $('#tablet_win10_obshepit').click(function() {
        $("#result_ip_win10_obhepit").show();
        $("#solution_title").hide();
        $("#hardware_obshepit").hide();
    });
    $('#pc_win7_ip_obshepit').click(function() {
        $("#result_ip_win7_obhepit").show();
        $("#solution_title").hide();
        $("#hardware_obshepit").hide();
    });
    $('#shtrih_ip_obshepit').click(function() {
        $("#result_ip_shtrih_obhepit").show();
        $("#solution_title").hide();
        $("#hardware_obshepit").hide();
    });


    $('#one_software_atol_tablet_scanner_btn').click(function() {
        $("#one_software_atol_tablet_scanner_desc").toggle();
    });

    $('#add_to_table').click(function() {
        text = $(this).val();
        price = $("#add_to_table").attr("price")
        $("#scanner_price_win10_check").empty();
        $('#scanner_price_win10_check').append(text);
        $("#scanner_price_win10").empty();
        $("#scanner_price_win10").append(price);
    });


    $('#scanner_drop_android').change(function() {
        city_id = $(this).val();
        $("#table_scanner").empty();
        $("#table_scanner").append(city_id);
    });
    $('#scanner_drop_win10').change(function() {
        city_id = $(this).val();
        text = $( "#scanner_drop_win10 option:selected" ).text();
        $("#scanner_price_win10").empty();
        $("#scanner_price_win10").append(city_id);
        $("#scanner_price_win10_check").empty();
        $('#scanner_price_win10_check').append(text);

    });
    $('#scanner_lan_drop_win10').change(function() {
        city_id = $(this).val();
        $("#price_lan_scanner_win10").empty();
        $("#price_lan_scanner_win10").append(city_id);
    });
    $('#fr_drop_win10_kass5usb').change(function() {
        city_id = $(this).val();
        text = $( "#fr_drop_win10_kass5usb option:selected" ).text();
        $("#fr_price_win10_kass5usb").empty();
        $("#fr_price_win10_kass5usb").append(city_id);
        $("#fr_name_win10_kass5usb_check").empty();
        $('#fr_name_win10_kass5usb_check').append(text);
    });


    $('#add_form_order_result_ip_android_ip').click(function() {
        city_id = $("#result_ip_android_ip").html();
        name = $("#name").val();
        phone = $("#phone").val();
        email = $("#email").val();
        $.ajax({
            type: "POST",
            url: "/solution/addscore",
            dataType: "html",
            data: {"city_id": city_id, "name": name, "phone": phone, "email": email,},
            success: function (data) {
                $("#form_order_result_ip_android_ip").hide();
                $("#result_ip_android_ip").hide();
                $("#thanks").show();
                $("#title_config").hide();
                $("#abbr").hide();
                $("#refresh").hide();
            }
        });
    });

    $('#add_form_one_software_atol_tablet_scanner_result').click(function() {
        city_id = $("#one_software_atol_tablet_scanner_result").html();
        name = $("#name").val();
        phone = $("#phone").val();
        email = $("#email").val();
        $.ajax({
            type: "POST",
            url: "/solution/addscore",
            dataType: "html",
            data: {"city_id": city_id, "name": name, "phone": phone, "email": email,},
            success: function (data) {
                $("#form_order_result_ip_android_ip").hide();
                $("#one_software_atol_tablet_scanner_result").hide();
                $("#thanks").show();
                $("#title_config").hide();
                $("#abbr").hide();
                $("#refresh").hide();
            }
        });
    });

    $('#add_rorm_one_software_tablet_win10_result').click(function() {
        $("#one_software_atol_tablet_scanner_btn").hide();
        city_id = $("#one_software_tablet_win10_result").html();
        name = $("#name").val();
        phone = $("#phone").val();
        email = $("#email").val();
        $.ajax({
            type: "POST",
            url: "/solution/addscore",
            dataType: "html",
            data: {"city_id": city_id, "name": name, "phone": phone, "email": email,},
            success: function (data) {
                $("#form_order_result_ip_android_ip").hide();
                $("#one_software_tablet_win10_result").hide();
                $("#thanks").show();
                $("#title_config").hide();
                $("#abbr").hide();
                $("#refresh").hide();
            }
        });
    });





    $('#remove_one').click(function() {
        $("#first_strok").hide();
    });
    $('#remove_one_kep').click(function() {
        $("#first_strok_kep").hide();
    });
    $('#remove_two').click(function() {
        $("#two_strok").hide();
    });
    $('#remove_three').click(function() {
        $("#three_strok").hide();
    });
    $('#remove_thoe').click(function() {
        $("#thoe_strok").hide();
    });
    $('#remove_five').click(function() {
        $("#five_strok").hide();
    });

    $('#remove_one1').click(function() {
        $("#first_strok1").hide();
    });
    $('#remove_one_kep1').click(function() {
        $("#first_strok_kep1").hide();
    });
    $('#remove_two1').click(function() {
        $("#two_strok1").hide();
    });
    $('#remove_three1').click(function() {
        $("#three_strok1").hide();
    });
    $('#remove_thoe1').click(function() {
        $("#thoe_strok1").hide();
    });

    $('#remove_one2').click(function() {
        $("#first_strok2").hide();
    });
    $('#remove_one_kep2').click(function() {
        $("#first_strok_kep2").hide();
    });
    $('#remove_two2').click(function() {
        $("#two_strok2").hide();
    });
    $('#remove_three2').click(function() {
        $("#three_strok2").hide();
    });
    $('#remove_thoe2').click(function() {
        $("#thoe_strok2").hide();
    });

    $('#remove_one3').click(function() {
        $("#first_strok3").hide();
    });
    $('#remove_one_kep3').click(function() {
        $("#first_strok_kep3").hide();
    });
    $('#remove_two3').click(function() {
        $("#two_strok3").hide();
    });
    $('#remove_three3').click(function() {
        $("#three_strok3").hide();
    });







    $('#summ').click(function(){
        var total = 0;

        $('#one_software_tablet_win10_result #price_position').each(function() {
            total +=  parseFloat($(this).text());
        });

        $('#one_software_tablet_win10_result .total_price').append(total);
    });





    $('#elba').click(function() {
            $("#elba-full").toggle();
            $("#focus-full").hide();
            $("#extern-full").hide();
            $("#diadoc-full").hide();
            $("#ca-full").hide();
    });
    $('#focus').click(function() {
            $("#focus-full").toggle();
            $("#elba-full").hide();
            $("#extern-full").hide();
            $("#diadoc-full").hide();
            $("#ca-full").hide();
    });
    $('#extern').click(function() {
            $("#extern-full").toggle();
            $("#elba-full").hide();
            $("#focus-full").hide();
            $("#diadoc-full").hide();
            $("#ca-full").hide();
    });
    $('#diadoc').click(function() {
            $("#diadoc-full").toggle();
            $("#elba-full").hide();
            $("#extern-full").hide();
            $("#focus-full").hide();
            $("#ca-full").hide();
    });
    $('#ca').click(function() {
            $("#ca-full").toggle();
            $("#elba-full").hide();
            $("#extern-full").hide();
            $("#diadoc-full").hide();
            $("#focus-full").hide();
    });
    
    setTimeout(function(){
	  $('#openModal').trigger('click');
	}, 2000);
    
  
    $('#choice_of_delivery').click(function() {
        if ($(this).is(':checked')) {
            $("#new_mail_delivery").show();
            $("#Order_type_of_delivery").val("Новая Почта"); 
            $("#Order_user_address").val("Доставка Новой Почтой в ближайшее отделение");
        }
         else {
            $("#new_mail_delivery").hide();
            $("#Order_type_of_delivery").val("");
            $("#Order_settlement_delivery").val("");
            $("#Order_delivery_address").val("");
            $('#drop').val("");
            $('#warehouses').val("");
            $('#Order_user_address').val("");
        }
    });    
    
    $('#info-oranization-logo').click(function() {
            $("#info-oranization").show();
            $("#doc-organization").hide();
    });
    $('#doc-organization-logo').click(function() {
            $("#doc-organization").show();
            $("#info-oranization").hide();
    });
    
    
    
    $('#choose_view_block').click(function() {
            $("#centerLayer").show();
            $("#product_block_list").hide();
    });
    $('#choose_view_list').click(function() {
            $("#centerLayer").hide();
            $("#product_block_list").show();
    });
     
    $( "#block-cart" ).focus(function() {
    alert( "Handler for .focus() called." );
    });
   
    $('#drop').change(function() {
        $('#loader').show();
        city_id = $(this).val();
        $("#Order_settlement_delivery").val(city_id);
        $.ajax({
            type: "POST",
            url: "/novaposhta/warehouse",
            dataType: "html",
            data: {"city_id": city_id},
            success: function (data) {
                $('#loader').hide();
                var container = $('#warehouseContainer');
                container.text('');
                container.append(data);
                $('#warehouses').change(function() {
                address = $(this).val();
                $("#Order_delivery_address").val(address);
            });
            }
        });
    });
    
    $('.remove_position').click(function () {
        var remove_id = $(this).data("id");
        $.ajax({
            type: "POST",
            url: "/cart/removeposition",
            dataType: "html",
            data: {"remove_id": remove_id},
            success: function (data) {
                $("#message_cart").html("Позиция удалена!").show();
                    setTimeout('$("#message_cart").hide();', 2600);
                    location.reload();  
            }
        });
    });
    
    $('#recalculate').click(function (e) {
        e.preventDefault();
        var recalculate_id = $('.count_product');
        recalculate_id.each(function() {
            $.ajax({
                type: "POST",
                url: "/cart/recalculate",
                dataType: "html",
                data: {"recalculate_id": $(this).data("id"), "recalculate_value": $(this).val()},
                success: function (data) {
                    data = $.parseJSON(data);
                    if (data.status) {
                        $('#total_price').text(data.total);
                        $('#count').text(data.count);
                        $('#price').text(data.total);
                        $('#block-cart span.count').text(data.count);
                    }
                }
            });
        });
        location.reload();
        return false;
    });

    $('.add-product').click(function () {
        var product_id = $(this).data("id");
        $("#message_cart").html("Добавляю.................").show();
        $(".messagecart").html("Добавляю...").show();
            $.ajax({
            type: "POST",
            url: "/cart",
            dataType: "html",
            data: {"product_id": product_id},
            success: function (data) {
                data = $.parseJSON(data);
                if (data.status) {
                    $('#price').text(data.total);
                    $('#block-cart span.count').text(data.count);
                    $(".messagecart").html("Добавлено в корзину!");
                    setTimeout('$(".messagecart").hide();', 1600);
                    $("#message_cart").html("Добавлено в корзину!").show();
                    setTimeout('$("#message_cart").hide();', 2600);
                }
            }
        });
    });
    
    $('#tabs .characteristics').click(function() {
            $("#characteristics").show();
            $("#photo_product").hide();
            $("#reviews").hide();
            $("#add_reviews_about_product").hide();
            
    });
    $('#tabs .photo_product').click(function() {
            $("#characteristics").hide();
            $("#photo_product").show();
            $("#reviews").hide();
            $("#add_reviews_about_product").hide();
    });
    $('#tabs .reviews').click(function() {
            $("#characteristics").hide();
            $("#photo_product").hide();
            $("#reviews").show();
            $("#add_reviews_about_product").show();
    });
       
    $('#send_reviews_message').click(function () {
        var product_id = $('#reviews_product_id').val();
        var reviews_message = $('#reviews_user_message').val();
        $("#message_cart").html("Добавляю.........................................").show();
            $.ajax({
            type: "POST",
            url: "/Reviews/Addcomment",
            dataType: "html",
            data: {"product_id": product_id, "reviews_message": reviews_message},
            success: function (data) {
                data = $.parseJSON(data);
                    if (data.status) {
                    $("#message_cart").html("Ошибка! Введите комментарий!").show();
                    setTimeout('$("#message_cart").hide();', 2600);
                    }
                    else {
                        $("#message_cart").html("Ваш комментарий опубликован!").show();
                        setTimeout('$("#message_cart").hide();', 2600);
                        location.reload();  
                        $("#characteristics").hide();
                        $("#photo_product").hide();
                        $("#reviews").show();
                        $("#add_reviews_about_product").show();
                    }
            }
        });
    });
    
    
    
    
    $('.user-like-product').click(function () {
        var product_id = $(this).data("id");
        $.ajax({
            type: "POST",
            url: "/cart/like",
            dataType: "html",
            data: {"product_id": product_id},
            success: function (data) {
                $("#message_cart").html("Добавлено в список желаемого товара!").show();
                    setTimeout('$("#message_cart").hide();', 2600);
            }
        });
    });
    $('#clear_like_product').click(function () {
        var clear = 1;
        $.ajax({
            type: "POST",
            url: "/cart/likeclear",
            dataType: "html",
            data: {"clear": clear},
            success: function (data) {
                    location.reload();  
            }
        });
    });
    
    $('#view_link_download_data_base').click(function () {
        var clear = 1;
        $.ajax({
            type: "POST",
            url: "/admin/settings/backupdatabase",
            dataType: "html",
            data: {"clear": clear},
            success: function (data) {
                $("#download_data_base").show();
            }
        });
    });
    
    
    
    function func() {
	$( "#call-me" ).addClass( "call-me" );
	}
	setTimeout(func, 5000);
    
    function saturday() {
		$("#saturday").hide();
	}
    setTimeout(saturday, 5000);




















    $('#add_to_table1').click(function() {
        text = $(this).val();
        price = $("#add_to_table1").attr("price")
        $("#table_scanner_name_android_one").empty();
        $('#table_scanner_name_android_one').append(text);
        $("#table_scanner_price_android_one").empty();
        $("#table_scanner_price_android_one").append(price);
    });
    $('#add_to_table2').click(function() {
        text = $(this).val();
        price = $("#add_to_table2").attr("price")
        $("#table_scanner_name_android_one").empty();
        $('#table_scanner_name_android_one').append(text);
        $("#table_scanner_price_android_one").empty();
        $("#table_scanner_price_android_one").append(price);
    });
    $('#add_to_table3').click(function() {
        text = $(this).val();
        price = $("#add_to_table3").attr("price")
        $("#table_scanner_name_android_one").empty();
        $('#table_scanner_name_android_one').append(text);
        $("#table_scanner_price_android_one").empty();
        $("#table_scanner_price_android_one").append(price);
    });
    $('#add_to_table4').click(function() {
        text = $(this).val();
        price = $("#add_to_table4").attr("price")
        $("#table_scanner_name_android_one").empty();
        $('#table_scanner_name_android_one').append(text);
        $("#table_scanner_price_android_one").empty();
        $("#table_scanner_price_android_one").append(price);
    });
    $('#add_to_table5').click(function() {
        text = $(this).val();
        price = $("#add_to_table5").attr("price")
        $("#scanner_price_win10_check").empty();
        $('#scanner_price_win10_check').append(text);
        $("#scanner_price_win10").empty();
        $("#scanner_price_win10").append(price);
    });
    $('#add_to_table6').click(function() {
        text = $(this).val();
        price = $("#add_to_table6").attr("price")
        $("#scanner_price_win10_check").empty();
        $('#scanner_price_win10_check').append(text);
        $("#scanner_price_win10").empty();
        $("#scanner_price_win10").append(price);
    });
    $('#add_to_table7').click(function() {
        text = $(this).val();
        price = $("#add_to_table7").attr("price")
        $("#scanner_price_win10_check").empty();
        $('#scanner_price_win10_check').append(text);
        $("#scanner_price_win10").empty();
        $("#scanner_price_win10").append(price);
    });
    $('#add_to_table8').click(function() {
        text = $(this).val();
        price = $("#add_to_table8").attr("price")
        $("#scanner_price_win10_check").empty();
        $('#scanner_price_win10_check').append(text);
        $("#scanner_price_win10").empty();
        $("#scanner_price_win10").append(price);
    });
    $('#add_to_table9').click(function() {
        text = $(this).val();
        price = $("#add_to_table9").attr("price")
        $("#scanner_price_win10_check").empty();
        $('#scanner_price_win10_check').append(text);
        $("#scanner_price_win10").empty();
        $("#scanner_price_win10").append(price);
    });
    $('#add_to_table10').click(function() {
        text = $(this).val();
        price = $("#add_to_table10").attr("price")
        $("#scanner_price_win10_check").empty();
        $('#scanner_price_win10_check').append(text);
        $("#scanner_price_win10").empty();
        $("#scanner_price_win10").append(price);
    });








    $('#add_to_table_fr_win10_kass5usb1').click(function() {
        text = $(this).val();
        price = $("#add_to_table_fr_win10_kass5usb1").attr("price")
        $("#fr_name_win10_kass5usb_check").empty();
        $('#fr_name_win10_kass5usb_check').append(text);
        $("#fr_price_win10_kass5usb").empty();
        $("#fr_price_win10_kass5usb").append(price);
    });
    $('#add_to_table_fr_win10_kass5usb2').click(function() {
        text = $(this).val();
        price = $("#add_to_table_fr_win10_kass5usb2").attr("price")
        $("#fr_name_win10_kass5usb_check").empty();
        $('#fr_name_win10_kass5usb_check').append(text);
        $("#fr_price_win10_kass5usb").empty();
        $("#fr_price_win10_kass5usb").append(price);
    });
    $('#add_to_table_fr_win10_kass5usb3').click(function() {
        text = $(this).val();
        price = $("#add_to_table_fr_win10_kass5usb3").attr("price")
        $("#fr_name_win10_kass5usb_check").empty();
        $('#fr_name_win10_kass5usb_check').append(text);
        $("#fr_price_win10_kass5usb").empty();
        $("#fr_price_win10_kass5usb").append(price);
    });
    $('#add_to_table_fr_win10_kass5usb4').click(function() {
        text = $(this).val();
        price = $("#add_to_table_fr_win10_kass5usb4").attr("price")
        $("#fr_name_win10_kass5usb_check").empty();
        $('#fr_name_win10_kass5usb_check').append(text);
        $("#fr_price_win10_kass5usb").empty();
        $("#fr_price_win10_kass5usb").append(price);
    });
    $('#add_to_table_fr_win10_kass5usb5').click(function() {
        text = $(this).val();
        price = $("#add_to_table_fr_win10_kass5usb5").attr("price")
        $("#fr_name_win10_kass5usb_check").empty();
        $('#fr_name_win10_kass5usb_check').append(text);
        $("#fr_price_win10_kass5usb").empty();
        $("#fr_price_win10_kass5usb").append(price);
    });
    $('#add_to_table_fr_win10_kass5usb6').click(function() {
        text = $(this).val();
        price = $("#add_to_table_fr_win10_kass5usb6").attr("price")
        $("#fr_name_win10_kass5usb_check").empty();
        $('#fr_name_win10_kass5usb_check').append(text);
        $("#fr_price_win10_kass5usb").empty();
        $("#fr_price_win10_kass5usb").append(price);
    });
    $('#add_to_table_fr_win10_kass5usb7').click(function() {
        text = $(this).val();
        price = $("#add_to_table_fr_win10_kass5usb7").attr("price")
        $("#fr_name_win10_kass5usb_check").empty();
        $('#fr_name_win10_kass5usb_check').append(text);
        $("#fr_price_win10_kass5usb").empty();
        $("#fr_price_win10_kass5usb").append(price);
    });
    $('#add_to_table_fr_win10_kass5usb8').click(function() {
        text = $(this).val();
        price = $("#add_to_table_fr_win10_kass5usb8").attr("price")
        $("#fr_name_win10_kass5usb_check").empty();
        $('#fr_name_win10_kass5usb_check').append(text);
        $("#fr_price_win10_kass5usb").empty();
        $("#fr_price_win10_kass5usb").append(price);
    });
    $('#add_to_table_fr_win10_kass5usb9').click(function() {
        text = $(this).val();
        price = $("#add_to_table_fr_win10_kass5usb9").attr("price")
        $("#fr_name_win10_kass5usb_check").empty();
        $('#fr_name_win10_kass5usb_check').append(text);
        $("#fr_price_win10_kass5usb").empty();
        $("#fr_price_win10_kass5usb").append(price);
    });
    $('#add_to_table_fr_win10_kass5usb10').click(function() {
        text = $(this).val();
        price = $("#add_to_table_fr_win10_kass5usb10").attr("price")
        $("#fr_name_win10_kass5usb_check").empty();
        $('#fr_name_win10_kass5usb_check').append(text);
        $("#fr_price_win10_kass5usb").empty();
        $("#fr_price_win10_kass5usb").append(price);
    });




    
});