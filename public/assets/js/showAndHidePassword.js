$(document).ready(function(){
    $("#showPassword").click(function(){
        var foo = $(this).prev().attr("type");
        if(foo == "password"){
            $(this).prev().attr("type", "text");
        } else {
            $(this).prev().attr("type", "password");
        }
    });
});
