$(document).ready(function() {
    $.getJSON( "http://localhost/newspaper-bootstrap/backend/get-articles.php", function( data ) {
        $('#text-1').text(data[0]["article"]);
        $('#text-2').text(data[1]["article"]);
    });
});