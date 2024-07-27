@extends('layouts.app')

@section('content')
    <main class="global-main">
        <div class="archive-section">
            <h1 class="global-title">Categories</h1>
            <p class="archive-excerpt global-excerpt">Praesent placerat laoreet ipsum ut fermentum. Ut mollis accumsan quam vitae porta. Nullam sit amet nibh id lorem fermentum feugiat rutrum egestas.</p>
        </div>
        <div class="custom-archive loop-section global-padding">
            <div class="global-subtitle">
                <small class="global-subtitle-title">
                    Explore our <span>categories</span>
                </small>
            </div>
            <div class="loop-wrap is-tags">
                @foreach($categories as $category)
                    <div class="item is-loop">
                        <div class="item-image is-landscape global-image global-image-orientation global-radius">
                            <a href="{{ route('showCategoryPosts', ['title' => $category->name, 'id' => $category->id]) }}" class="global-link" aria-label="Idea"></a>
                            <img
                                sizes="(max-width:480px) 300px, (max-width:768px) 600px"
                                src="https://images.unsplash.com/photo-1637836375461-197de8876f90?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMTc3M3wwfDF8YWxsfDE0MHx8fHx8fDJ8fDE2MzgwMTg2NDc&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=2000"
                                alt="Idea">
                        </div>
                        <div class="item-content">
                            <h2 class="item-title"><a href="{{ route('showCategoryPosts', ['title' => $category->name, 'id' => $category->id]) }}">{{ $category->name }}</a></h2>
                            <small>{{ $category->posts_count }} posts</small>
                            <p class="item-excerpt">
                                {{ $category->meta_title }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </main>
@endsection
