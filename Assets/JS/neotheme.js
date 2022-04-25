$(document).ready(function () {
    $.getScript("Dinamic/Assets/JS/Custom.js", function (data) {
    });
});

function hideNeoSidebar() {
    $("#sidebar").fadeOut('fast');
    $("#sidebar-overlay").fadeOut('slow');
}

function showNeoSidebar() {
    $("#sidebar-overlay").fadeIn('slow');
    $("#sidebar").fadeIn('fast');
}