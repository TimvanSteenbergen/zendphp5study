$(function() {
    $('h1').onclick(function () {
        $(this).nextNode().toggle();
    })
});
//function onload() {
//    $('h1').onclick(function () {
//        $(this).nextNode().toggle();
//    })
//});
function EvaluateAgain(i){

    var code = $('textarea#source'+i)[0].value;
    uf_urltemp = "http://localhost:8000/functions.php"; //1&XDEBUG_SESSION_START=PHPSTORM";
    $.ajax({
        type: "GET",
        url: uf_urltemp,
        data: {codeJSON:code},
        datatype: JSON,
        success: function (response) {
            $('textarea#result' + i)[0].innerHTML = response;
        },
        error: function (response) {
            $('textarea#result' + i)[0].innerHTML = "Oeps, het is niet gelukt om die code uit te voeren.";
        }
    });

}