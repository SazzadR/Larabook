$(document).ready(function () {
    $('body').on('keydown', '.comments__create-form', function () {
        if (event.keyCode == 13) {
            event.preventDefault();
            $(this).submit();
        }
    });
});