$(document).ready(function () {
    $('body').on('keydown', '.comments__create-form', function () {
        if (event.keyCode == 13) {
            event.preventDefault();

            var form = $(this);
            var postUrl = form.attr('action');
            var formData = form.serializeArray();

            $.ajax({
                type: 'POST',
                url: postUrl,
                data: formData,
                beforeSend: function () {
                    //
                },
                success: function (response) {
                    // form.nextAll('div.comments:first').append(response.comment);
                    form.nextAll('div.hide-show-comments:first').children('div.comments').append(response.comment);
                    form.nextAll('div.hide-show-comments:first').show();
                    form.find('textarea').val('');
                }
            });
        }
    });
});