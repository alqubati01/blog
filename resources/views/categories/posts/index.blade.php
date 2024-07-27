@extends('layouts.app')

@section('content')
    <main class="global-main">
        <div class="archive-section is-image">
            <div class="archive-image global-image">
                <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMTc3M3wwfDF8c2VhcmNofDR8fHJldmlld3xlbnwwfHx8fDE2MzgwMTg3MTU&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=2000" loading="lazy" alt="Review">
            </div>
            <h1 class="archive-title global-title is-tag">{{ $category->name }}<span>{{ $category->posts_count }}</span></h1>
            <p class="archive-excerpt global-excerpt">{{ $category->meta_title }}</p>
        </div>

        <div class="loop-section global-padding">
            <div class="global-subtitle">
                <small class="global-subtitle-title">
                    Check out the <span>latest posts</span></small>
            </div>
            <div class="loop-wrap" id="data-wrapper">
                @include('categories.posts.data')
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
        var ENDPOINT = "{{ route('showCategoryPosts', ['title' => $category->name, 'id' => $category->id]) }}";
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
