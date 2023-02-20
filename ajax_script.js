// Depended State & City
$(document).ready(function(){
    $("#state").change(function(){
        var state_id = $(this).val();
        $.ajax({
            url:"ajax_get_state_city_data.php",
            method:"POST",
            data:{stateId:state_id},
            success:function(data){
                // $("#city").append(data);
                //$("#city").find();
                $("#city").html(data);
            }
        });
    });
});

// insert Data
 $(document).on('submit', '#form', function(event){
    event.preventDefault();
    $.ajax({
        url:"ajax_insert_data.php",
        method: "POST",
        data: $(this).serialize(),
        success: function (data) {
            //$('#msg').html(data);
            $('#form').find('input').val('');
        }
    });
});

//Update Data
// 1. State dropdown
$(document).ready(function(){
    $.ajax({
        method:"POST",
        url:"ajax_get_state_data.php",
        success:function(data){
            $("#state").append(data);
            $("#state").find();
            jQuery("#state_id").val();
            var state_id = $("#state_id").val();
            $("#state").val(state_id);
            $('#state').html(data);
        }
    });
});