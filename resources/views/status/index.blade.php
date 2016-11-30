@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @include('layouts.partials.errors')

            @include('status.partials.publish-status-form')

            <div id="statuses">
                @include('status.data')
            </div>

            <div class="ajax-load text-center" style="display:none">
                <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More Posts</p>
            </div>
        </div>
    </div>
@stop

@section('page_specific_js')
    <script type="text/javascript" src="{{ asset('js/submit-form-with-enter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/like-status.js') }}"></script>
    <script type="text/javascript">
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
    </script>
@stop