$(document).ready (function() {
    $('h1').click (function(){
        $(this.nextElementSibling).toggle();
    })

    try {
        chapter = document.getElementById('chapter').value;
    } catch (EventException) {
        alert('Chapter niet aangegeven. Voorzie deze pagina van een hidden input met id chapter.');
    }
    $('#'+chapter).show();

    // var myCodeMirror = CodeMirror(document.body);
    var myCodeMirror1 = CodeMirror.fromTextArea('Ch1p1ex21');
    var myCodeMirror2 = CodeMirror(document.body, {
        value: "function myScript2(){return 100;}\n",
        mode:  "javascript"
    });
});

function EvaluateAgain(i){

    var code = $('textarea#source'+i)[0].value;

    uf_urltemp = "functions.php"; //1&XDEBUG_SESSION_START=PHPSTORM";
    $.ajax({
        type: "GET",
        url: uf_urltemp,
        data: {codeJSON:code},
        datatype: JSON,
        success: function (response) {
            $('textarea#result' + i)[0].innerHTML = response;
        },
        error: function (response) {
            response += "Oeps, het is niet gelukt om die code uit te voeren.";
            $('textarea#result' + i)[0].innerHTML = response;
        }
    });
}
