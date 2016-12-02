var page = 1;
$(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
        page++;
        loadMoreStatus(page);
    }
});

function loadMoreStatus(page) {
    $.ajax({
        url: '?page=' + page,
        type: 'get',
        beforeSend: function () {
            $('.ajax-load').show();
        }
    })
        .done(function (response) {
            if (response.html.length > 0) {
                $('.ajax-load').hide();
                $('#statuses').append(response.html);
            } else {
                $('.ajax-load').html('No more status found');
            }
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            console.log('Server not responding...');
        });
}