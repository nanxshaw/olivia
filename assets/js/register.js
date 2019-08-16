

$("#proses").show();
$("#cancel").hide();
$("#treatment").show();
$("#periksa").hide();
$("#konsultasi").hide();
$("#treatment-2").show();
$("#periksa-2").hide();
$("#konsultasi-2").hide();
$('#layanan').on('change', function() {
    var o = $("#layanan option:selected").val();
    if(o == 1){
        $("#proses").hide();
        $("#cancel").show();

        $("#treatment").show();
        $("#periksa").hide();
        $("#konsultasi").hide();
        $("#treatment-2").show();
        $("#periksa-2").hide();
        $("#konsultasi-2").hide();
    }else if(o == 2){
        $("#proses").hide();
        $("#cancel").show();

        $("#treatment").hide();
        $("#periksa").show();
        $("#konsultasi").hide();
        $("#treatment-2").hide();
        $("#periksa-2").show();
        $("#konsultasi-2").hide();
    }else if(o == 3){
        $("#proses").hide();
        $("#cancel").show();

        $("#treatment").hide();
        $("#periksa").hide();
        $("#konsultasi").show();
        $("#treatment-2").hide();
        $("#periksa-2").hide();
        $("#konsultasi-2").show();
    }else{
        $("#proses").show();
        $("#cancel").hide();
        
        $("#treatment").show();
        $("#periksa").hide();
        $("#konsultasi").hide();
        $("#treatment-2").show();
        $("#periksa-2").hide();
        $("#konsultasi-2").hide();
    }
});

$("#layanan_1").on('click', function() {
    $("#proses").hide();
    $("#cancel").show();

    $("#treatment").show();
    $("#periksa").hide();
    $("#konsultasi").hide();
    $("#treatment-2").show();
    $("#periksa-2").hide();
    $("#konsultasi-2").hide();
});

$("#layanan_2").on('click', function() {
    $("#proses").hide();
    $("#cancel").show();

    $("#treatment").hide();
    $("#periksa").show();
    $("#konsultasi").hide();
    $("#treatment-2").hide();
    $("#periksa-2").show();
    $("#konsultasi-2").hide();
});

$("#layanan_3").on('click', function() {
    $("#proses").hide();
    $("#cancel").show();

    $("#treatment").hide();
    $("#periksa").hide();
    $("#konsultasi").show();
    $("#treatment-2").hide();
    $("#periksa-2").hide();
    $("#konsultasi-2").show();
});
