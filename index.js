$(document).ready(function() {
    $(".content").hide();
    $("#productType").change(function() {
        var selectedValue = $(this).val();
        $(`.content input`).removeAttr("required",false);
        $(".content").hide();
        $("#" + selectedValue).show();
        $(`#${selectedValue} input` ).attr("required",true);
        
  });   
});


