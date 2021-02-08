@include('layouts.header')

<!-- Blog Details Hero Section Begin -->
<section class="blog-details-hero set-bg" data-setbg="{{asset('uploads/gyms_images/' . $gym->photo)}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bd-hero-text">
                    <h2>{{$gym->name}}</h2>
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
                        <p>
                            <strong>Şehir:</strong> {{$gym->get_City->name}}
                        </p>
                        <p>
                            <strong>İlçe:</strong> {{$gym->get_District->name}}
                        </p>

                        <p>
                            <strong>Kapasitesi:</strong>

                            @if($gym->capacity == 1)
                                0-50
                            @elseif($gym->capacity == 2)
                               50-100
                            @else
                                100+
                            @endif
                        </p>

                        <p>
                            <strong>Çalışma günleri:</strong>

                            @if($gym->work_days == 1)
                                Her gün
                            @elseif($gym->work_days == 2)
                               Hafta içi her gün
                            @else
                                Pazartesi-Cumartesi
                            @endif
                        </p>

                        <p>
                            <strong>Çalışma saatleri:</strong>

                            @if($gym->work_hours == 1)
                                10:00 - 18:00
                            @elseif($gym->work_hours == 2)
                                10:00 - 19:00
                            @else
                                10:00 - 20:00
                            @endif
                        </p>
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
                                    <h5>{{$gym->user[0]->name}} {{$gym->user[0]->surname}}</h5>
                                    <h6><a href="mailto:{{$gym->user[0]->email}}">{{$gym->user[0]->email}}</a></h6>
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
