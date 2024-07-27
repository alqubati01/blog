@extends('layouts.app')

@section('content')
    <main class="global-main">
        <progress class="post-progress"></progress>
        <article class="post-section">
            <div class="post-header">
                <div class="post-header-wrap global-padding">
                    <div class="post-header-container">
                        <div class="post-header-content">
                            <div>
                                <div class="post-tags global-tags">
                                    @foreach($post->tags as $tag)
                                        <a href="">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                                <h1 class="post-title global-title">{{ $post->title }}</h1>
                                <p class="post-excerpt global-excerpt">{{ $post->short_description }}</p>
                            </div>
                            <div class="post-meta">
                                <div class="post-authors global-authors">
                                    <div>
                                        <div class="post-item-author global-item-author is-image global-image">
                                            <a href="../author/liza/index.html" class="global-link" title="Liza Harber"></a>
                                            <img src="{{ asset('img/author/2.jpg') }}" loading="lazy" alt="Liza Harber">
                                        </div>
                                    </div>
                                </div>
                                <div class="post-meta-content">
                                    <a href="../author/liza/index.html">{{ $post->user->name }}</a>
                                    <time datetime="2022-01-19">{{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans() }} — 3 minutes read</time>
                                </div>
                            </div>
                        </div>
                        <div class="post-header-image">
                            <figure>
                                <div class="global-image global-image-orientation global-radius">
                                    <img
                                         sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                                         src="{{ 'http://127.0.0.1:8000/storage/' . $post->image->path }}"
                                         alt="New technology is not good or evil in and of itself">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-content global-padding">
                @if($post->visibility == 1)
                    <div class="members-cta-teaser">
                        {!! $post->content !!}
                    </div>
                    <div class="members-cta global-radius">
                        <h2>This post is for subscribers only</h2>
                        <p class="global-excerpt">Sign up now to read the post and get access to the full library of posts for subscribers only.</p>
                        <a class="members-cta-button global-button" href="../signup/index.html">Sign up now</a>
                        <small class="members-cta-question global-question">Already have an account? <a href="../signin/index.html">Sign in</a></small>
                    </div>
                @else
                    {!! $post->content !!}
                @endif
            </div>
        </article>

        <aside class="navigation-section global-padding">
            <div class="navigation-wrap">
                <a href="{{ route('showPost', ['post' => $postNewer->id]) }}" class="navigation-next">
                    <div class="navigation-image global-image global-radius">
                        <img src="{{ 'http://127.0.0.1:8000/storage/' . $postNewer->image->path }}" loading="lazy" alt="">
                    </div>
                    <div class="navigation-content">
                        <small>Newer post</small>
                        <br>
                        <h3>{{ $postNewer->title }}</h3>
                    </div>
                </a>
                <a href="{{ route('showPost', ['post' => $postOlder->id]) }}" class="navigation-prev">
                    <div class="navigation-content ">
                        <small>Older post</small>
                        <br>
                        <h3>{{ $postOlder->title }}</h3>
                    </div>
                    <div class="navigation-image global-image global-radius">
                        <img src="{{ 'http://127.0.0.1:8000/storage/' . $postOlder->image->path }}" loading="lazy" alt="">
                    </div>
                </a>
            </div>
        </aside>
        <div class="comments-section global-padding">
            <div class="comments-wrap">
                <div class="comments-content" style="margin-top: 20px;margin-bottom: 20px;">
                    @foreach($post->comments as $comment)
                        <div class="kg-card kg-callout-card kg-callout-card-blue" style="border-radius: calc(var(--border-radius)/1.5); background-color: #f6f6f8;padding-top: 24px;padding-bottom: 24px;">
                            <div class="kg-callout-emoji">
                                <div class="post-item-author global-item-author is-image global-image">
                                    <a href="../author/liza/index.html" class="global-link" title="Liza Harber"></a>
                                    <img src="{{ asset('img/author/2.jpg') }}" loading="lazy" alt="Liza Harber">
                                </div>
                            </div>
                            <div class="kg-callout-text">
                                <p style="margin: 0; padding: 0; font-weight: bold;">{{$comment->user->name}}</p>
                                <p style="margin: 0; padding: 0;margin-bottom: 0; padding-bottom: 0; font-size: 16px;">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</p>
                                <p style="margin-top: 4px; margin-bottom: 0px;">{{$comment->content}}</p>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
        <div class="special-section global-padding">
            <div class="special-subtitle global-subtitle">
                <small class="global-subtitle-title">You might <span>also like</span></small>
            </div>
            <div class="special-wrap">
                @foreach($relatedPosts as $relatedPost)
                    <article class="item is-special is-image">
                        <div class="item-image global-image global-image-orientation global-radius">
                            <a href="{{ route('showPost', ['post' => $relatedPost->id]) }}" class="global-link" aria-label="Being unique is better than being perfect"></a>
                            <img
                                sizes="(max-width:480px) 300px, 600px"
                                src="{{ 'http://127.0.0.1:8000/storage/' . $relatedPost->image->image }}"
                                loading="lazy"
                                alt="">
                            <div class="item-authors global-authors">
                                <div>
                                    <div class="item-author global-item-author is-image global-image">
                                        <a href="../author/damian/index.html" class="global-link" title="Damian Erdman"></a>
                                        <img src="{{ asset('img/author/6.jpg') }}" loading="lazy" alt="Damian Erdman">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h2 class="item-title">
                                <a href="{{ route('showPost', ['post' => $relatedPost->id]) }}">
                                    {{ $relatedPost->title }}
                                </a>
                            </h2>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </main>
@endsection

