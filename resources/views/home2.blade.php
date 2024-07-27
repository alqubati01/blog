@extends('layouts.app')

@section('content')
    <main class="global-main">
        <div class="hero-section">
            <div class="hero-wrap">
                <div class="hero-content global-padding">
                    <h1 class="hero-title hero-title-large"><span>Hey, we’re Basho.</span> See our thoughts, stories and ideas.</h1>
                    <div class="subscribe-section">
                        <div class="subscribe-wrap">
                            <form data-members-form="subscribe" class="subscribe-form">
                                <input data-members-email type="email" placeholder="Your email address" aria-label="Your email address" required>
                                <button class="global-button" type="submit">Subscribe</button>
                            </form>
                            <div class="subscribe-form-caption">
                                Get the email newsletter and unlock access to members-only content and updates
                            </div>
                            <div class="subscribe-alert">
                                <small class="alert-loading global-alert">Processing your application</small>
                                <small class="alert-success global-alert">Please check your inbox and click the link to confirm your subscription.</small>
                                <small class="alert-error global-alert">There was an error sending the email</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured-section">
                    <div class="global-padding">
                        <div class="featured-subtitle global-subtitle">
                            <small class="global-subtitle-title">Get started with our <span>best stories</span></small>
                            <div class="featured-navigation">
                                <button class="featured-btn-previous" aria-label="Previous"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8.775 3.225 0 12l8.775 8.775 1.498-1.407-6.421-6.267H24v-2.202H3.852l6.421-6.267-1.498-1.407Z"/></svg></button>
                                <button class="featured-btn-next" aria-label="Next"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M15.225 20.775 24 12l-8.775-8.775-1.498 1.407 6.421 6.267H0v2.202h20.148l-6.421 6.267 1.498 1.407Z"/></svg></button>
                            </div>
                        </div>
                        <div class="featured-wrap">
                            <article class="item is-featured is-small is-image">
                                <div class="item-image global-image global-image-orientation global-radius">
                                    <a href="new-technology-is-not-good-or-evil-in-and-of-itself/index.html" class="global-link" aria-label="New technology is not good or evil in and of itself"></a>
                                    <img
                                        sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                                        src="{{ asset('img/blog/1.jpg') }}"
                                        loading="lazy"
                                        alt="">
                                    <div class="item-authors global-authors">
                                        <div>
                                            <div class="item-author global-item-author is-image global-image">
                                                <a href="author/liza/index.html" class="global-link" title="Liza Harber"></a>
                                                <img src="{{ asset('img/author/1.jpg') }}" loading="lazy" alt="Liza Harber">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="item-tags global-tags">
                                        <a href="tag/design/index.html">Design</a>
                                        <span>
                                                <a href="tag/idea/index.html">Idea</a>
                                                <a href="tag/review/index.html">Review</a>
                                            </span>
                                    </div>
                                    <h2 class="item-title"><a href="new-technology-is-not-good-or-evil-in-and-of-itself/index.html">New technology is not good or evil in and of itself</a></h2>
                                    <p class="item-excerpt">
                                        Vestibulum vehicula dui venenatis neque tempor, accumsan iaculis sapien ornare. Sed at ante porta, ullamcorper massa eu, ullamcorper sapien. Donec pretium tortor augue. Integer egestas ut tellus sed pretium. Nullam tristique augue ut mattis vulputate. Duis et lorem in odio ultricies porttitor.
                                    </p>
                                </div>
                            </article>
                            <article class="item is-featured is-small is-image">
                                <div class="item-image global-image global-image-orientation global-radius">
                                    <a href="its-a-new-era-in-design-there-are-no-rules/index.html" class="global-link" aria-label="It’s a new era in design, there are no rules"></a>
                                    <img
                                        sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                                        src="{{ asset('img/blog/2.jpg') }}"
                                        loading="lazy"
                                        alt="">
                                    <div class="item-authors global-authors">
                                        <div>
                                            <div class="item-author global-item-author is-image global-image">
                                                <a href="author/breana/index.html" class="global-link" title="Breana Flatley"></a>
                                                <img src="{{ asset('img/author/2.jpg') }}" loading="lazy" alt="Breana Flatley">
                                            </div>
                                            <div class="item-author global-item-author is-image global-image">
                                                <a href="author/daryl/index.html" class="global-link" title="Daryl Wehner"></a>
                                                <img src="{{ asset('img/author/3.jpg') }}" loading="lazy" alt="Daryl Wehner">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="item-tags global-tags">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5.445 9.333V6.667C5.445 2.985 8.38 0 12 0c3.62 0 6.554 2.985 6.554 6.667v2.666s2.622 1.214 2.622 6c0 4.787-3.815 8.667-8.52 8.667h-1.312c-4.706 0-8.52-3.88-8.52-8.667 0-4.786 2.621-6 2.621-6zm10.487 0V6.667c0-2.21-1.76-4-3.932-4-2.172 0-3.933 1.79-3.933 4v2.666h7.865z"/></svg>
                                        <a href="tag/creative/index.html">Creative</a>
                                        <span>
                                                <a href="tag/product/index.html">Product</a>
                                            </span>
                                    </div>
                                    <h2 class="item-title"><a href="its-a-new-era-in-design-there-are-no-rules/index.html">It’s a new era in design, there are no rules</a></h2>
                                    <p class="item-excerpt">
                                        Quibus autem in rebus tanta obscuratio non fit, fieri tamen potest, ut id ipsum, quod interest, non sit magnum. Ita fit ut, quanta differentia est in principiis naturalibus, tanta sit in finibus bonorum malorumque dissimilitudo.
                                    </p>
                                </div>
                            </article>
                            <article class="item is-featured is-small is-image">
                                <div class="item-image global-image global-image-orientation global-radius">
                                    <a href="perfection-has-to-do-with-the-end-product/index.html" class="global-link" aria-label="Perfection has to do with the end product"></a>
                                    <img
                                        sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                                        src="{{ asset('img/blog/3.jpg') }}"
                                        loading="lazy"
                                        alt="">
                                    <div class="item-authors global-authors">
                                        <div>
                                            <div class="item-author global-item-author is-image global-image">
                                                <a href="author/nichole/index.html" class="global-link" title="Nichole Becker"></a>
                                                <img src="{{ asset('img/author/4.jpg') }}" loading="lazy" alt="Nichole Becker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="item-tags global-tags">
                                        <a href="tag/design/index.html">Design</a>
                                        <span>
                                                <a href="tag/creative/index.html">Creative</a>
                                                <a href="tag/idea/index.html">Idea</a>
                                            </span>
                                    </div>
                                    <h2 class="item-title"><a href="perfection-has-to-do-with-the-end-product/index.html">Perfection has to do with the end product</a></h2>
                                    <p class="item-excerpt">
                                        Aenean eget urna aliquet, viverra orci quis, aliquam erat. Ut rutrum quam quam, eu eleifend est blandit et. Vivamus suscipit ultrices venenatis. Aliquam massa ipsum, porta quis hendrerit at, varius sed leo. Curabitur convallis urna sit amet mi tempus posuere.
                                    </p>
                                </div>
                            </article>
                            <article class="item is-featured is-small is-image">
                                <div class="item-image global-image global-image-orientation global-radius">
                                    <a href="everyone-has-a-different-life-story/index.html" class="global-link" aria-label="Everyone has a different life story"></a>
                                    <img
                                        sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                                        src="{{ asset('img/blog/4.jpg') }}"
                                        loading="lazy"
                                        alt="">
                                    <div class="item-authors global-authors">
                                        <div>
                                            <div class="item-author global-item-author is-image global-image">
                                                <a href="author/breana/index.html" class="global-link" title="Breana Flatley"></a>
                                                <img src="{{ asset('img/author/2.jpg') }}" loading="lazy" alt="Breana Flatley">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="item-tags global-tags">
                                        <a href="tag/people/index.html">People</a>
                                        <span>
                                                <a href="tag/story/index.html">Story</a>
                                            </span>
                                    </div>
                                    <h2 class="item-title"><a href="everyone-has-a-different-life-story/index.html">Everyone has a different life story</a></h2>
                                    <p class="item-excerpt">
                                        Non est igitur summum malum dolor. Tu autem inter haec tantam multitudinem hominum interiectam non vides nec laetantium nec dolentium. Nunc vero a primo quidem mirabiliter occulta natura est nec perspici nec cognosci potest.
                                    </p>
                                </div>
                            </article>
                            <article class="item is-featured is-small is-image">
                                <div class="item-image global-image global-image-orientation global-radius">
                                    <a href="the-difference-is-quality/index.html" class="global-link" aria-label="The difference is quality"></a>
                                    <img
                                        sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                                        src="{{ asset('img/blog/5.jpg') }}"
                                        loading="lazy"
                                        alt="">
                                    <div class="item-authors global-authors">
                                        <div>
                                            <div class="item-author global-item-author is-image global-image">
                                                <a href="author/brenda/index.html" class="global-link" title="Brenda Reichel"></a>
                                                <img src="{{ asset('img/author/5.jpg') }}" loading="lazy" alt="Brenda Reichel">
                                            </div>
                                            <div class="item-author global-item-author is-image global-image">
                                                <a href="author/liza/index.html" class="global-link" title="Liza Harber"></a>
                                                <img src="{{ asset('img/author/1.jpg') }}" loading="lazy" alt="Liza Harber">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="item-tags global-tags">
                                        <a href="tag/design/index.html">Design</a>
                                        <span>
                                                <a href="tag/lifestyle/index.html">Lifestyle</a>
                                                <a href="tag/idea/index.html">Idea</a>
                                            </span>
                                    </div>
                                    <h2 class="item-title"><a href="the-difference-is-quality/index.html">The difference is quality</a></h2>
                                    <p class="item-excerpt">
                                        Vide, ne etiam menses! nisi forte eum dicis, qui, simul atque arripuit, interficit. Atque his de rebus et splendida est eorum et illustris oratio.
                                    </p>
                                </div>
                            </article>
                            <article class="item is-featured is-small is-image">
                                <div class="item-image global-image global-image-orientation global-radius">
                                    <span class="is-last"></span>
                                    <a href="problems-are-not-stop-signs-they-are-guidelines/index.html" class="global-link" aria-label="Problems are not stop signs, they are guidelines"></a>
                                    <img
                                        sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                                        src="{{ asset('img/blog/6.jpg') }}"
                                        loading="lazy"
                                        alt="">
                                    <div class="item-authors global-authors">
                                        <div>
                                            <div class="item-author global-item-author is-image global-image">
                                                <a href="author/breana/index.html" class="global-link" title="Breana Flatley"></a>
                                                <img src="{{ asset('img/author/2.jpg') }}" loading="lazy" alt="Breana Flatley">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="item-tags global-tags">
                                        <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5.445 9.333V6.667C5.445 2.985 8.38 0 12 0c3.62 0 6.554 2.985 6.554 6.667v2.666s2.622 1.214 2.622 6c0 4.787-3.815 8.667-8.52 8.667h-1.312c-4.706 0-8.52-3.88-8.52-8.667 0-4.786 2.621-6 2.621-6zm10.487 0V6.667c0-2.21-1.76-4-3.932-4-2.172 0-3.933 1.79-3.933 4v2.666h7.865z"/></svg>
                                        <a href="tag/idea/index.html">Idea</a>
                                        <span>
                                                <a href="tag/creative/index.html">Creative</a>
                                            </span>
                                    </div>
                                    <h2 class="item-title"><a href="problems-are-not-stop-signs-they-are-guidelines/index.html">Problems are not stop signs, they are guidelines</a></h2>
                                    <p class="item-excerpt">
                                        Quid ad utilitatem tantae pecuniae. Duo enim genera quae erant, fecit tria. Et quod est munus, quod opus sapientiae.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="loop-section global-padding">
            <div class="loop-subtitle">
                <small class="loop-subtitle-title global-title">
                    See what we’ve <br><span>written lately</span>
                </small>
                <div class="global-authors option-1-2-3">
                    <div>
                        <div class="global-item-author is-image global-image">
                            <a href="author/breana/index.html" class="global-link" title="Breana Flatley"></a>
                            <img src="{{ asset('img/author/2.jpg') }}" loading="lazy" alt="Breana Flatley">
                        </div>
                        <div class="global-item-author is-image global-image">
                            <a href="author/damian/index.html" class="global-link" title="Damian Erdman"></a>
                            <img src="{{ asset('img/author/6.jpg') }}" loading="lazy" alt="Damian Erdman">
                        </div>
                        <div class="global-item-author is-image global-image">
                            <a href="author/daryl/index.html" class="global-link" title="Daryl Wehner"></a>
                            <img src="{{ asset('img/author/3.jpg') }}" loading="lazy" alt="Daryl Wehner">
                        </div>
                        <div class="global-item-author is-image global-image">
                            <a href="author/nichole/index.html" class="global-link" title="Nichole Becker"></a>
                            <img src="{{ asset('img/author/4.jpg') }}" loading="lazy" alt="Nichole Becker">
                        </div>
                        <div class="global-item-author is-image global-image">
                            <a href="author/liza/index.html" class="global-link" title="Liza Harber"></a>
                            <img src="{{ asset('img/author/1.jpg') }}" loading="lazy" alt="Liza Harber">
                        </div>
                    </div>
                    <small>Meet our author</small>
                    <small>Meet our authors</small>
                    <small>Meet our top authors</small>
                </div>
            </div>
            <div class="loop-wrap">
                <article class="item is-loop is-image">
                    <div class="item-image global-image global-image-orientation global-radius">
                        <a href="creating-is-a-privilege-but-its-also-a-gift/index.html" class="global-link" aria-label="Creating is a privilege but it’s also a gift"></a>
                        <img
                            sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                            src="{{ asset('img/blog/7.jpg') }}"
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
                            <a href="tag/lifestyle/index.html">Lifestyle</a>
                            <span>
                                    <a href="tag/people/index.html">People</a>
                                    <a href="tag/review/index.html">Review</a>
                                </span>
                        </div>
                        <h2 class="item-title"><a href="creating-is-a-privilege-but-its-also-a-gift/index.html">Creating is a privilege but it’s also a gift</a></h2>
                        <p class="item-excerpt">
                            Nullam vel lectus vel velit pellentesque dignissim nec id magna. Cras molestie ornare quam at semper. Proin a ipsum ex. Curabitur eu venenatis justo. Nullam felis augue, imperdiet at sodales a, sollicitudin nec risus.
                        </p>
                    </div>
                </article>
                <article class="item is-loop is-image">
                    <div class="item-image global-image global-image-orientation global-radius">
                        <a href="being-unique-is-better-than-being-perfect/index.html" class="global-link" aria-label="Being unique is better than being perfect"></a>
                        <img
                            sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                            src="{{ asset('img/blog/8.jpg') }}"
                            loading="lazy"
                            alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/damian/index.html" class="global-link" title="Damian Erdman"></a>
                                    <img src="{{ asset('img/author/6.jpg') }}" loading="lazy" alt="Damian Erdman">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="item-tags global-tags">
                            <a href="tag/design/index.html">Design</a>
                            <span>
                                    <a href="tag/product/index.html">Product</a>
                                    <a href="tag/idea/index.html">Idea</a>
                                </span>
                        </div>
                        <h2 class="item-title"><a href="being-unique-is-better-than-being-perfect/index.html">Being unique is better than being perfect</a></h2>
                        <p class="item-excerpt">
                            Nam in pretium dui. Phasellus dapibus, mi at molestie cursus, neque eros aliquet nisi, non efficitur nisi est nec mi. Nullam semper, ligula a luctus ornare, leo turpis fermentum lectus, quis volutpat urna orci a lectus. Duis et odio lobortis, auctor justo ut, egestas magna.
                        </p>
                    </div>
                </article>
                <article class="item is-loop is-image">
                    <div class="item-image global-image global-image-orientation global-radius">
                        <a href="now-were-getting-somewhere/index.html" class="global-link" aria-label="Now we’re getting somewhere"></a>
                        <img
                            sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                            src="{{ asset('img/blog/9.jpg') }}"
                            loading="lazy"
                            alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/daryl/index.html" class="global-link" title="Daryl Wehner"></a>
                                    <img src="{{ asset('img/author/3.jpg') }}" loading="lazy" alt="Daryl Wehner">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="item-tags global-tags">
                            <a href="tag/idea/index.html">Idea</a>
                            <span>
                                    <a href="tag/product/index.html">Product</a>
                                    <a href="tag/review/index.html">Review</a>
                                </span>
                        </div>
                        <h2 class="item-title"><a href="now-were-getting-somewhere/index.html">Now we’re getting somewhere</a></h2>
                        <p class="item-excerpt">
                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec volutpat rhoncus quam, a feugiat elit gravida eget. Curabitur id pharetra ligula. Integer porttitor suscipit ante ac faucibus. Sed a enim non enim viverra pulvinar vel diam ut lorem congue feugiat.
                        </p>
                    </div>
                </article>
                <article class="item is-loop is-image">
                    <div class="item-image global-image global-image-orientation global-radius">
                        <a href="the-trick-to-getting-more-done-is-to-have-the-freedom-to-roam-around/index.html" class="global-link" aria-label="The trick to getting more done is to have the freedom to roam around"></a>
                        <img
                            sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                            src="{{ asset('img/blog/10.jpg') }}"
                            loading="lazy"
                            alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/breana/index.html" class="global-link" title="Breana Flatley"></a>
                                    <img src="{{ asset('img/author/2.jpg') }}" loading="lazy" alt="Breana Flatley">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="item-tags global-tags">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5.445 9.333V6.667C5.445 2.985 8.38 0 12 0c3.62 0 6.554 2.985 6.554 6.667v2.666s2.622 1.214 2.622 6c0 4.787-3.815 8.667-8.52 8.667h-1.312c-4.706 0-8.52-3.88-8.52-8.667 0-4.786 2.621-6 2.621-6zm10.487 0V6.667c0-2.21-1.76-4-3.932-4-2.172 0-3.933 1.79-3.933 4v2.666h7.865z"/></svg>
                            <a href="tag/lifestyle/index.html">Lifestyle</a>
                            <span>
                                    <a href="tag/design/index.html">Design</a>
                                </span>
                        </div>
                        <h2 class="item-title"><a href="the-trick-to-getting-more-done-is-to-have-the-freedom-to-roam-around/index.html">The trick to getting more done is to have the freedom to roam around</a></h2>
                        <p class="item-excerpt">
                            Integer nec mi cursus, blandit est et, auctor mauris. Aenean ex metus, faucibus in mattis at, tincidunt eu dolor. Cras hendrerit massa nec augue placerat rutrum. Sed facilisis massa enim, ac tempus diam elementum sit amet.
                        </p>
                    </div>
                </article>
                <article class="item is-loop is-image">
                    <div class="item-image global-image global-image-orientation global-radius">
                        <a href="every-day-in-every-city-and-town-across-the-country/index.html" class="global-link" aria-label="Every day, in every city and town across the country"></a>
                        <img
                            sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                            src="{{ asset('img/blog/11.jpg') }}"
                            loading="lazy"
                            alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/damian/index.html" class="global-link" title="Damian Erdman"></a>
                                    <img src="{{ asset('img/author/6.jpg') }}" loading="lazy" alt="Damian Erdman">
                                </div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/breana/index.html" class="global-link" title="Breana Flatley"></a>
                                    <img src="{{ asset('img/author/2.jpg') }}" loading="lazy" alt="Breana Flatley">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="item-tags global-tags">
                            <a href="tag/people/index.html">People</a>
                            <span>
                                    <a href="tag/story/index.html">Story</a>
                                    <a href="tag/lifestyle/index.html">Lifestyle</a>
                                </span>
                        </div>
                        <h2 class="item-title"><a href="every-day-in-every-city-and-town-across-the-country/index.html">Every day, in every city and town across the country</a></h2>
                        <p class="item-excerpt">
                            Morbi a facilisis lectus. Ut eu dapibus risus, a interdum justo. Vestibulum volutpat velit ac tellus mollis, sit amet sodales metus elementum. Aliquam eu mi massa. Proin suscipit enim a pulvinar viverra.
                        </p>
                    </div>
                </article>
                <article class="item is-loop is-image">
                    <div class="item-image global-image global-image-orientation global-radius">
                        <a href="your-voice-your-mind-your-story-your-vision/index.html" class="global-link" aria-label="Your voice, your mind, your story, your vision"></a>
                        <img
                            sizes="(max-width:480px) 300px, (max-width:768px) 600px, 1200px"
                            src="{{ asset('img/blog/12.jpg') }}"
                            loading="lazy"
                            alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/damian/index.html" class="global-link" title="Damian Erdman"></a>
                                    <img src="{{ asset('img/author/6.jpg') }}" loading="lazy" alt="Damian Erdman">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="item-tags global-tags">
                            <a href="tag/people/index.html">People</a>
                            <span>
                                    <a href="tag/review/index.html">Review</a>
                                    <a href="tag/story/index.html">Story</a>
                                </span>
                        </div>
                        <h2 class="item-title"><a href="your-voice-your-mind-your-story-your-vision/index.html">Your voice, your mind, your story, your vision</a></h2>
                        <p class="item-excerpt">
                            Nullam auctor nisi non tortor porta, id dapibus lectus rhoncus. Vivamus lobortis posuere enim finibus sodales. Phasellus quis tellus scelerisque, sagittis tortor et, maximus metus.
                        </p>
                    </div>
                </article>	</div>
        </div>
        <div class="pagination-section">
            <a href="page/2/index.html" aria-label="Load more"></a>
            <button class="global-button">Load more</button>
        </div>
        <div class="special-section global-padding">
            <div class="special-subtitle global-subtitle">
                <small class="global-subtitle-title"><span>Recommended</span></small>
            </div>
            <div class="special-wrap">
                <article class="item is-special is-image">
                    <div class="item-image global-image global-image-orientation global-radius">
                        <a href="the-trick-to-getting-more-done-is-to-have-the-freedom-to-roam-around/index.html" class="global-link" aria-label="The trick to getting more done is to have the freedom to roam around"></a>
                        <img
                            src="{{ asset('img/blog/10.jpg') }}"
                            loading="lazy"
                            alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/breana/index.html" class="global-link" title="Breana Flatley"></a>
                                    <img src="{{ asset('img/author/2.jpg') }}" loading="lazy" alt="Breana Flatley">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="the-trick-to-getting-more-done-is-to-have-the-freedom-to-roam-around/index.html">The trick to getting more done is to have the freedom to roam around</a></h2>
                    </div>
                </article>
                <article class="item is-special is-image">
                    <div class="item-image global-image global-image-orientation global-radius">
                        <a href="every-day-in-every-city-and-town-across-the-country/index.html" class="global-link" aria-label="Every day, in every city and town across the country"></a>
                        <img
                            src="{{ asset('img/blog/11.jpg') }}"
                            loading="lazy"
                            alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/damian/index.html" class="global-link" title="Damian Erdman"></a>
                                    <img src="{{ asset('img/author/6.jpg') }}" loading="lazy" alt="Damian Erdman">
                                </div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/breana/index.html" class="global-link" title="Breana Flatley"></a>
                                    <img src="{{ asset('img/author/2.jpg') }}" loading="lazy" alt="Breana Flatley">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="every-day-in-every-city-and-town-across-the-country/index.html">Every day, in every city and town across the country</a></h2>
                    </div>
                </article>
                <article class="item is-special is-image">
                    <div class="item-image global-image global-image-orientation global-radius">
                        <a href="i-work-best-when-my-space-is-filled-with-inspiration/index.html" class="global-link" aria-label="I work best when my space is filled with inspiration"></a>
                        <img
                            sizes="(max-width:480px) 300px, 600px"
                            src="{{ asset('img/blog/13.jpg') }}"
                            loading="lazy"
                            alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/liza/index.html" class="global-link" title="Liza Harber"></a>
                                    <img src="{{ asset('img/author/1.jpg') }}" loading="lazy" alt="Liza Harber">
                                </div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/daryl/index.html" class="global-link" title="Daryl Wehner"></a>
                                    <img src="{{ asset('img/author/3.jpg') }}" loading="lazy" alt="Daryl Wehner">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="i-work-best-when-my-space-is-filled-with-inspiration/index.html">I work best when my space is filled with inspiration</a></h2>
                    </div>
                </article>
                <article class="item is-special is-image">
                    <div class="item-image global-image global-image-orientation global-radius">
                        <a href="i-have-my-own-definition-of-minimalism/index.html" class="global-link" aria-label="I have my own definition of minimalism"></a>
                        <img
                            sizes="(max-width:480px) 300px, 600px"
                            src="{{ asset('img/blog/14.jpg') }}"
                            loading="lazy"
                            alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/breana/index.html" class="global-link" title="Breana Flatley"></a>
                                    <img src="{{ asset('img/author/2.jpg') }}" loading="lazy" alt="Breana Flatley">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="i-have-my-own-definition-of-minimalism/index.html">I have my own definition of minimalism</a></h2>
                    </div>
                </article>
                <article class="item is-special is-image">
                    <div class="item-image global-image global-image-orientation global-radius">
                        <a href="change-your-look-and-your-attitude/index.html" class="global-link" aria-label="Change your look and your attitude"></a>
                        <img
                            sizes="(max-width:480px) 300px, 600px"
                            src="{{ asset('img/blog/15.jpg') }}"
                            loading="lazy"
                            alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/damian/index.html" class="global-link" title="Damian Erdman"></a>
                                    <img src="{{ asset('img/author/6.jpg') }}" loading="lazy" alt="Damian Erdman">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="change-your-look-and-your-attitude/index.html">Change your look and your attitude</a></h2>
                    </div>
                </article>
                <article class="item is-special is-image">
                    <div class="item-image global-image global-image-orientation global-radius">
                        <a href="the-difference-is-quality/index.html" class="global-link" aria-label="The difference is quality"></a>
                        <img
                            sizes="(max-width:480px) 300px, 600px"
                            src="{{ asset('img/blog/5.jpg') }}"
                            loading="lazy"
                            alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/brenda/index.html" class="global-link" title="Brenda Reichel"></a>
                                    <img src="{{ asset('img/author/5.jpg') }}" loading="lazy" alt="Brenda Reichel">
                                </div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="author/liza/index.html" class="global-link" title="Liza Harber"></a>
                                    <img src="{{ asset('img/author/1.jpg') }}" loading="lazy" alt="Liza Harber">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="the-difference-is-quality/index.html">The difference is quality</a></h2>
                    </div>
                </article>
            </div>
        </div>
    </main>
@endsection
