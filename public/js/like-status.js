$(document).ready(function () {
    $('.like-btn').on('click', function (element) {

        var form = $(this).parent('form');
        var postUrl = window.location.protocol + '//' + window.location.host + '/status/like';
        var token = form.find('input[name=_token]').val();
        var statusId = form.find('input[name=status_id]').val();
        var likeCounterSpan = $(this).parents('article').find('div.like-counter').children('span');

        $.ajax({
            type: 'POST',
            url: postUrl,
            data: { 'status_id': statusId },
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-CSRF-TOKEN', token);
            },
            success: function (response) {
                likeCounterSpan.text(response.totalLikes);
            }
        })

    });
});