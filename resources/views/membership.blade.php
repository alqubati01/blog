@extends('layouts.app')

@section('content')
    <main class="global-main">
        <div class="post-section">
            <div class="post-header">
                <div class="post-header-wrap global-padding is-center">
                    <div class="post-header-container">
                        <div class="post-header-content">
                            <div>
                                <div class="post-tags global-tags"></div>
                                <h1 class="post-title global-title">Membership</h1>
                                <p class="post-excerpt global-excerpt">Unlock full access to Basho and see the entire library of subscribers-only content &amp; updates</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="membership-section global-padding">
                    <div class="global-subtitle">
                        <small class="global-subtitle-title">See <span>pricing plans</span></small>
                    </div>
                    <div class="membership-wrap global-radius global-bg-image" style="background-image: url(https://images.unsplash.com/photo-1636728682521-5bf9a2c4f533?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=MnwxMTc3M3wwfDF8c2VhcmNofDczfHxncmFkaWVudHxlbnwwfHx8fDE2NDc4MDMyNzY&amp;ixlib=rb-1.2.1&amp;q=80&amp;w=2000)">
                        <div class="membership-switch" data-active-price="yearly">
                            <button data-price="monthly">Monthly</button>
                            <button data-price="yearly">Yearly</button>
                        </div>
                        <div class="membership-cards">
                            <div class="membership-card">
                                <div class="membership-card-content">
                                    <div class="membership-card-label">Free</div>
                                    <h2 class="membership-card-price">$0</h2>
                                    <p>Sign up now to be notified of new content and support Basho, help keep this site independent.</p>
                                    <div class="membership-card-list">
                                        <ul>
                                            <li>Full access to posts for subscribers</li>
                                            <li>Weekly email newsletter</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="../signup/index.html" class="membership-button global-button">Sign up for free</a>
                            </div>
                            <div class="membership-card">
                                <div class="membership-card-content">
                                    <div class="membership-card-label">Premium</div>
                                    <h2 class="membership-card-price" data-monthly>$7<span>/month</span></h2>
                                    <h2 class="membership-card-price" data-yearly>$79<span>/year</span></h2>
                                    <p>Get access to the library of paid-members only posts.</p>
                                    <div class="membership-card-list">
                                        <ul>
                                            <li>Full access to Premium posts</li>
                                            <li>Weekly email newsletter</li>
                                            <li>Support indie publishing</li>
                                            <li>Simple, secure card payment</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:" data-portal="signup/60b172f0a74ce72549949f11/monthly" class="membership-button global-button" data-monthly>Sign up now</a>
                                <a href="javascript:" data-portal="signup/60b172f0a74ce72549949f11/yearly" class="membership-button global-button" data-yearly>Sign up now</a>
                            </div>
                            <div class="membership-card">
                                <div class="membership-card-content">
                                    <div class="membership-card-label">Premium Plus</div>
                                    <h2 class="membership-card-price" data-monthly>$14<span>/month</span></h2>
                                    <h2 class="membership-card-price" data-yearly>$149<span>/year</span></h2>
                                    <p>Get access to everything.</p>
                                    <div class="membership-card-list">
                                        <ul>
                                            <li>Full access to Premium Plus posts</li>
                                            <li>Members-only Q&amp;A</li>
                                            <li>Weekly email newsletter</li>
                                            <li>Support indie publishing</li>
                                            <li>Simple, secure card payment</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:" data-portal="signup/62cc4a1353be0690e934406a/monthly" class="membership-button global-button" data-monthly>Sign up now</a>
                                <a href="javascript:" data-portal="signup/62cc4a1353be0690e934406a/yearly" class="membership-button global-button" data-yearly>Sign up now</a>
                            </div>
                        </div>
                    </div>
                    <small class="global-question">Already have an account? <a href="../signin/index.html">Sign in</a></small>
                </div>
            </div></div>
        <div class="faq-section global-padding">
            <div class="faq-wrap">
                <h2 class="faq-title">FAQs</h2>
                <div class="faq-content">
                    <div class="kg-card kg-toggle-card" data-kg-toggle-state="close"><div class="kg-toggle-heading"><h4 class="kg-toggle-heading-text">What is Basho?</h4><button class="kg-toggle-card-icon"><svg id="Regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path class="cls-1" d="M23.25,7.311,12.53,18.03a.749.749,0,0,1-1.06,0L.75,7.311"/></svg></button></div><div class="kg-toggle-content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In consectetur orci eu congue malesuada. Aliquam erat leo, euismod non tellus ac, placerat tincidunt purus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis nibh metus, elementum congue tincidunt vel, elementum quis lectus. Cras placerat, urna ac lobortis tincidunt, massa magna bibendum ipsum, a faucibus neque nibh eu neque. Nam molestie fermentum orci, eu fermentum lacus vestibulum et.</p></div></div><div class="kg-card kg-toggle-card" data-kg-toggle-state="close"><div class="kg-toggle-heading"><h4 class="kg-toggle-heading-text">What is your subscription model?</h4><button class="kg-toggle-card-icon"><svg id="Regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path class="cls-1" d="M23.25,7.311,12.53,18.03a.749.749,0,0,1-1.06,0L.75,7.311"/></svg></button></div><div class="kg-toggle-content"><p>Sed cursus et eros sed pulvinar. Donec posuere erat turpis, nec vehicula velit venenatis at. Vestibulum pulvinar molestie neque non gravida. Quisque massa elit, luctus vitae efficitur sed, convallis a quam.</p></div></div><div class="kg-card kg-toggle-card" data-kg-toggle-state="close"><div class="kg-toggle-heading"><h4 class="kg-toggle-heading-text">What benefits do I receive as a subscriber?</h4><button class="kg-toggle-card-icon"><svg id="Regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path class="cls-1" d="M23.25,7.311,12.53,18.03a.749.749,0,0,1-1.06,0L.75,7.311"/></svg></button></div><div class="kg-toggle-content"><p>Ornare egestas lobortis cras eu nibh dignissim integer consectetur ullamcorper. Tincidunt nisl luctus tincidunt faucibus molestie turpis tincidunt. Ornare egestas lobortis cras eu nibh dignissim integer consectetur ullamcorper.</p></div></div><div class="kg-card kg-toggle-card" data-kg-toggle-state="close"><div class="kg-toggle-heading"><h4 class="kg-toggle-heading-text">How do I manage my subscription?</h4><button class="kg-toggle-card-icon"><svg id="Regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path class="cls-1" d="M23.25,7.311,12.53,18.03a.749.749,0,0,1-1.06,0L.75,7.311"/></svg></button></div><div class="kg-toggle-content"><p>Phasellus blandit arcu id varius tincidunt. Suspendisse potenti. Cras commodo augue et aliquet efficitur. Donec pretium tincidunt justo, efficitur venenatis ligula elementum at. Suspendisse volutpat neque vitae bibendum bibendum.</p></div></div><div class="kg-card kg-toggle-card" data-kg-toggle-state="close"><div class="kg-toggle-heading"><h4 class="kg-toggle-heading-text">How are subscriptions renewed?</h4><button class="kg-toggle-card-icon"><svg id="Regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path class="cls-1" d="M23.25,7.311,12.53,18.03a.749.749,0,0,1-1.06,0L.75,7.311"/></svg></button></div><div class="kg-toggle-content"><p>Aenean sed est eu est laoreet semper. Fusce sit amet iaculis orci. Proin gravida laoreet mattis. In eu urna vestibulum, mattis urna eget, commodo nisi. In in malesuada est, vel venenatis nulla. Curabitur gravida velit magna, sed cursus nisi hendrerit non. Integer volutpat, lectus vitae egestas iaculis, nunc augue eleifend quam, at posuere massa sapien ac leo. Mauris placerat sollicitudin lacus, nec tempus erat maximus vel.</p></div></div><div class="kg-card kg-toggle-card" data-kg-toggle-state="close"><div class="kg-toggle-heading"><h4 class="kg-toggle-heading-text">Give me one reason to choose Basho</h4><button class="kg-toggle-card-icon"><svg id="Regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path class="cls-1" d="M23.25,7.311,12.53,18.03a.749.749,0,0,1-1.06,0L.75,7.311"/></svg></button></div><div class="kg-toggle-content"><p>Pellentesque at neque dignissim magna imperdiet elementum. Mauris feugiat finibus nisi, et convallis nisl consectetur ac. Duis pellentesque a tellus in commodo.</p></div></div><div class="kg-card kg-toggle-card" data-kg-toggle-state="close"><div class="kg-toggle-heading"><h4 class="kg-toggle-heading-text">How do I get paid?</h4><button class="kg-toggle-card-icon"><svg id="Regular" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path class="cls-1" d="M23.25,7.311,12.53,18.03a.749.749,0,0,1-1.06,0L.75,7.311"/></svg></button></div><div class="kg-toggle-content"><p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tincidunt felis fringilla orci sagittis porta. Nunc quam enim, pretium sed ex ac, faucibus placerat mauris. Donec interdum urna felis, id mollis mi imperdiet a. Aenean scelerisque justo orci, non tincidunt leo luctus.</p></div></div>
                </div>
            </div>
        </div>
        <div class="special-section global-padding">
            <div class="special-subtitle global-subtitle">
                <small class="global-subtitle-title">The latest posts <span>only for subscribers</span></small>
            </div>
            <div class="special-wrap">
                <article class="item is-special is-image">
                    <div class="item-image global-image global-image-orientation global-radius">

                        <a href="../the-trick-to-getting-more-done-is-to-have-the-freedom-to-roam-around/index.html" class="global-link" aria-label="The trick to getting more done is to have the freedom to roam around"></a>
                        <img srcset="/content/images/size/w300/2022/03/photo-1631016800696-5ea8801b3c2a.jpeg 300w,
			 /content/images/size/w600/2022/03/photo-1631016800696-5ea8801b3c2a.jpeg 600w"
                             sizes="(max-width:480px) 300px, 600px"
                             src="../content/images/size/w600/2022/03/photo-1631016800696-5ea8801b3c2a.jpg"
                             loading="lazy"
                             alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="../author/breana/index.html" class="global-link" title="Breana Flatley"></a>
                                    <img src="../content/images/size/w300/2022/03/alison-erickson-Zt8IkNfhk54-unsplash.jpg" loading="lazy" alt="Breana Flatley">				</div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="../the-trick-to-getting-more-done-is-to-have-the-freedom-to-roam-around/index.html">The trick to getting more done is to have the freedom to roam around</a></h2>
                    </div>
                </article>		<article class="item is-special is-image">
                    <div class="item-image global-image global-image-orientation global-radius">

                        <a href="../i-work-best-when-my-space-is-filled-with-inspiration/index.html" class="global-link" aria-label="I work best when my space is filled with inspiration"></a>
                        <img srcset="/content/images/size/w300/2022/03/photo-1593259037198-c720f4420d7f.jpeg 300w,
			 /content/images/size/w600/2022/03/photo-1593259037198-c720f4420d7f.jpeg 600w"
                             sizes="(max-width:480px) 300px, 600px"
                             src="../content/images/size/w600/2022/03/photo-1593259037198-c720f4420d7f.jpg"
                             loading="lazy"
                             alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="../author/liza/index.html" class="global-link" title="Liza Harber"></a>
                                    <img src="../content/images/size/w300/2022/03/good-faces-onKIR2oTW0o-unsplash.jpg" loading="lazy" alt="Liza Harber">				</div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="../author/daryl/index.html" class="global-link" title="Daryl Wehner"></a>
                                    <img src="../content/images/size/w300/2022/03/kazi-mizan-ItjRqGiei5g-unsplash.jpg" loading="lazy" alt="Daryl Wehner">				</div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="../i-work-best-when-my-space-is-filled-with-inspiration/index.html">I work best when my space is filled with inspiration</a></h2>
                    </div>
                </article>		<article class="item is-special is-image">
                    <div class="item-image global-image global-image-orientation global-radius">

                        <a href="../its-a-new-era-in-design-there-are-no-rules/index.html" class="global-link" aria-label="It’s a new era in design, there are no rules"></a>
                        <img srcset="/content/images/size/w300/2022/03/photo-1603808033176-9d134e6f2c74.jpeg 300w,
			 /content/images/size/w600/2022/03/photo-1603808033176-9d134e6f2c74.jpeg 600w"
                             sizes="(max-width:480px) 300px, 600px"
                             src="../content/images/size/w600/2022/03/photo-1603808033176-9d134e6f2c74.jpg"
                             loading="lazy"
                             alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="../author/breana/index.html" class="global-link" title="Breana Flatley"></a>
                                    <img src="../content/images/size/w300/2022/03/alison-erickson-Zt8IkNfhk54-unsplash.jpg" loading="lazy" alt="Breana Flatley">				</div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="../author/daryl/index.html" class="global-link" title="Daryl Wehner"></a>
                                    <img src="../content/images/size/w300/2022/03/kazi-mizan-ItjRqGiei5g-unsplash.jpg" loading="lazy" alt="Daryl Wehner">				</div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="../its-a-new-era-in-design-there-are-no-rules/index.html">It’s a new era in design, there are no rules</a></h2>
                    </div>
                </article>		<article class="item is-special is-image">
                    <div class="item-image global-image global-image-orientation global-radius">

                        <a href="../the-secret-is-to-work-less-as-individuals-and-more-as-a-team/index.html" class="global-link" aria-label="The secret is to work less as individuals and more as a team"></a>
                        <img srcset="/content/images/size/w300/2022/03/photo-1619066400673-c973159d4e0f.jpeg 300w,
			 /content/images/size/w600/2022/03/photo-1619066400673-c973159d4e0f.jpeg 600w"
                             sizes="(max-width:480px) 300px, 600px"
                             src="../content/images/size/w600/2022/03/photo-1619066400673-c973159d4e0f.jpg"
                             loading="lazy"
                             alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="../author/daryl/index.html" class="global-link" title="Daryl Wehner"></a>
                                    <img src="../content/images/size/w300/2022/03/kazi-mizan-ItjRqGiei5g-unsplash.jpg" loading="lazy" alt="Daryl Wehner">				</div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="../the-secret-is-to-work-less-as-individuals-and-more-as-a-team/index.html">The secret is to work less as individuals and more as a team</a></h2>
                    </div>
                </article>		<article class="item is-special is-image">
                    <div class="item-image global-image global-image-orientation global-radius">

                        <a href="../the-perfect-place-that-helps-you-get-work-done-in-peace/index.html" class="global-link" aria-label="The perfect place that helps you get work done in peace"></a>
                        <img srcset="/content/images/size/w300/2022/03/photo-1587702068694-a909ef4aa346.jpeg 300w,
			 /content/images/size/w600/2022/03/photo-1587702068694-a909ef4aa346.jpeg 600w"
                             sizes="(max-width:480px) 300px, 600px"
                             src="../content/images/size/w600/2022/03/photo-1587702068694-a909ef4aa346.jpg"
                             loading="lazy"
                             alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="../author/breana/index.html" class="global-link" title="Breana Flatley"></a>
                                    <img src="../content/images/size/w300/2022/03/alison-erickson-Zt8IkNfhk54-unsplash.jpg" loading="lazy" alt="Breana Flatley">				</div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="../author/nichole/index.html" class="global-link" title="Nichole Becker"></a>
                                    <img src="../content/images/size/w300/2022/03/joshua-oyebanji-kMC1v6rBHMI-unsplash-2.jpg" loading="lazy" alt="Nichole Becker">				</div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="../the-perfect-place-that-helps-you-get-work-done-in-peace/index.html">The perfect place that helps you get work done in peace</a></h2>
                    </div>
                </article>		<article class="item is-special is-image">
                    <div class="item-image global-image global-image-orientation global-radius">

                        <a href="../problems-are-not-stop-signs-they-are-guidelines/index.html" class="global-link" aria-label="Problems are not stop signs, they are guidelines"></a>
                        <img srcset="/content/images/size/w300/2022/03/photo-1597214844654-01d9d941e0fa.jpeg 300w,
			 /content/images/size/w600/2022/03/photo-1597214844654-01d9d941e0fa.jpeg 600w"
                             sizes="(max-width:480px) 300px, 600px"
                             src="../content/images/size/w600/2022/03/photo-1597214844654-01d9d941e0fa.jpg"
                             loading="lazy"
                             alt="">
                        <div class="item-authors global-authors">
                            <div>
                                <div class="item-author global-item-author is-image global-image">
                                    <a href="../author/breana/index.html" class="global-link" title="Breana Flatley"></a>
                                    <img src="../content/images/size/w300/2022/03/alison-erickson-Zt8IkNfhk54-unsplash.jpg" loading="lazy" alt="Breana Flatley">				</div>
                            </div>
                        </div>
                    </div>
                    <div class="item-content">
                        <h2 class="item-title"><a href="../problems-are-not-stop-signs-they-are-guidelines/index.html">Problems are not stop signs, they are guidelines</a></h2>
                    </div>
                </article>	</div>
        </div>
    </main>
@endsection
