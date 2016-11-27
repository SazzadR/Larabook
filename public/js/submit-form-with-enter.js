$(document).ready(function () {
    $('.comments__create-form').on('keydown', function () {
        if (event.keyCode == 13) {
            event.preventDefault();
            $(this).submit();
        }
    });
});