$(document).ready(function(){
    var tmpClass;
    var test;

    $("i:first-child").toggle(function(){

        test = $(this).attr('class').split(' ')[1];
        tmpClass =  $("#"+test).attr('class');
        $("#"+test).removeAttr('class');
        console.log(test);
    });
    
    $("i:first-child").mouseout(function(){
        test = $(this).attr('class').split(' ')[1];
        $("#"+test).addClass("hidden-lg hidden-sm hidden-md hidden-xs");
    });
});