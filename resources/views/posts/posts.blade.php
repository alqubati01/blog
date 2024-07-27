@extends('layouts.app')

@section('content')
    <main class="global-main">
        <div class="loop-section global-padding">
            <div class="loop-wrap" id="data-wrapper">
                @include('posts.data')
            </div>
        </div>

        <div class="pagination-section">
            <button class="global-button load-more-data">Load more</button>
        </div>

        <div class="pagination-section auto-load" style="display: none;">
            <span>Loading...</span>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script>
        var ENDPOINT = "{{ route('showPosts') }}";
        var page = 1;

        $(".load-more-data").click(function () {
            page++;
            LoadMore(page);
        });

        function LoadMore(page) {
            $.ajax({
                url: ENDPOINT + "?page=" + page,
                datatype: "html",
                type: "get",
                beforeSend: function () {
                    $('.auto-load').show();
                }
            })
                .done(function (response) {
                    console.log(response);
                    if (response.html == '') {
                        $('.auto-load').html("End :(");
                        return;
                    }
                    $('.auto-load').hide();
                    $("#data-wrapper").append(response.html);
                })
                .fail(function (jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });
        }
    </script>
@endpush
