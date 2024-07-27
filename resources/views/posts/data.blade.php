@foreach($posts as $post)
    <article class="item is-loop is-image">
            <div class="item-image global-image global-image-orientation global-radius">
                <a href="{{ route('showPost', ['post' => $post->id]) }}" class="global-link" aria-label="Creating is a privilege but it’s also a gift"></a>
                <img
                    sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                    {{--                            src="{{ asset('img/blog/7.jpg') }}"--}}
                    src="{{ 'http://127.0.0.1:8000/storage/' . $post->image->image }}"
                    loading="lazy"
                    alt="">
                <div class="item-authors global-authors">
                    <div>
                        <div class="item-author global-item-author is-image global-image">
                            <a href="author/nichole/index.html" class="global-link" title="Nichole Becker"></a>
                            <img src="{{ asset('img/author/3.jpg') }}" loading="lazy" alt="Nichole Becker">
                        </div>
                        <div class="item-author global-item-author is-image global-image">
                            <a href="author/daryl/index.html" class="global-link" title="Daryl Wehner"></a>
                            <img src="{{ asset('img/author/4.jpg') }}" loading="lazy" alt="Daryl Wehner">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-content">
                <div class="item-tags global-tags">
                    @if($post->visibility == 1)
                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5.445 9.333V6.667C5.445 2.985 8.38 0 12 0c3.62 0 6.554 2.985 6.554 6.667v2.666s2.622 1.214 2.622 6c0 4.787-3.815 8.667-8.52 8.667h-1.312c-4.706 0-8.52-3.88-8.52-8.667 0-4.786 2.621-6 2.621-6zm10.487 0V6.667c0-2.21-1.76-4-3.932-4-2.172 0-3.933 1.79-3.933 4v2.666h7.865z"/></svg>
                    @endif
                    @forelse($post->tags as $tag)
                        <a href="{{ route('showTagPosts', ['title' => $tag->name, 'id' => $tag->id]) }}">{{ $tag->name }}</a>
                    @empty
                        <a href="#">No tags for this post</a>
                    @endforelse
                </div>
                <h2 class="item-title">
                    <a href="{{ route('showPost', ['post' => $post->id]) }}">{{ \Illuminate\Support\Str::limit($post->title, 60) }}</a>
                </h2>
                <p class="item-excerpt">
                    {{ \Illuminate\Support\Str::limit($post->short_description, 120) }}
                </p>
            </div>
        </article>
@endforeach
