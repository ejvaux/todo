$('#clear-btn').on('click', function(e){
    $(this).closest('form').find("input[type=text],input[type=date], textarea ").val("");
})