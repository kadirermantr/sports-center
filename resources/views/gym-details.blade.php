@include('layouts.header')

<!-- Blog Details Hero Section Begin -->
<section class="blog-details-hero set-bg" data-setbg="{{asset('uploads/gyms_images/' . $gym->photo)}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bd-hero-text">
                    <h2>{{$gym->name}}</h2>
                    <span>{{$gym->get_City->name}} - {{$gym->get_District->name}}</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Hero Section End -->


<!-- Blog Details Section Begin -->
<section class="gym-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="bd-text">
                    <div class="bd-title">
                        <p>Your clients would like to see optimal results for minimal work. For this reason, it can
                            be difficult to convince them that a website redesign enhances SEO strategies. However,
                            if you try to redesign a site without taking SEO into account, you are going to face
                            bigger problems down the road.</p>
                        <p>Start off by explaining to clients what will happen if you ignore SEO in your redesign.
                            Explain to them how a website redesign enhances SEO strategies across the board. A
                            redesign is essential and should be part of your client’s budget. There are a couple of
                            risks to point out.</p>
                    </div>
                    <div class="bd-pic">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ URL::asset('img/blog/bd-1.jpg"') }}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ URL::asset('img/blog/bd-2.jpg"') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="tag-share">
                        <div class="tags">
                            <a href="#">Camera</a>
                            <a href="#">Photography</a>
                            <a href="#">Tips</a>
                        </div>
                        <div class="social-share">
                            <span>Paylaş:</span>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="blog-author">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="ba-pic">
                                    <img src="{{ URL::asset('img/blog/blog-posted.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="ba-text">
                                    <h5>Shane Lynch</h5>
                                    <p>Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        voluptate velit esse cillum bore et dolore magna aliqua. </p>
                                    <div class="bt-social">
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="leave-comment">
                        <h3>Yorum Yaz</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Ad Soyad">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="E-Posta">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Mesajınız"></textarea>
                                    <button type="submit">Gönder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->


@include('layouts.footer')
