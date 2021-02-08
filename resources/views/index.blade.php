@include('layouts.header')

<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="img/hero-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-text">
                    <h1>SPORTS CENTER</h1>
                    <p>Çevrendeki en yakın ve en uygun spor salonunu mu arıyorsun?<br />Bulunduğun şehir ve ilçeyi seç ve spor salonlarını bir arada gör.</p>
                    <a href="/salonlar" class="primary-btn">Devamını oku</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- About Section Begin -->
<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-pic">
                    <img src="img/about-pic.jpg" alt="">
                    <a href="https://www.youtube.com/watch?v=ToRETlx8DlY" class="play-btn video-popup">
                        <img src="img/play.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-text">
                    <h2>Hakkımızda</h2>
                    <p class="first-para">
                        Sports Center, spor salonlarını ve sporcuları bir arada toplamayı amaçlayan bir platformdur.
                        Sporcular kendilerine en yakın ve en uygun spor salonlarını görüntüleyebildiği gibi,
                        spor salonu sahipleri de başvuru yaparak spor salonlarını ekleyebilmektedir.
                    </p>

                    <br />

                    <p class="second-para">
                        Eğer spor salonunuz var ise ve salonunuzu yayınlamak istiyorsanız <a href="/gym-application">başvuru</a> sayfasından başvuruda bulunabilirsiniz.
                    </p>
                    <a href="/hakkimizda" class="primary-btn">Devamını oku</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Services Section Begin -->
<section class="services-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="services-pic">
                    <img src="img/services/service-pic.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-items">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="services-item">
                                <img src="img/services/service-icon-2.png" alt="">
                                <h4>Kas Geliştir</h4>
                                <p>
                                    Kas yapmak için vücut tipiniz öğrendikten sonra kendinize bir hedef belirlemelisiniz.
                                </p>
                            </div>
                            <div class="services-item bg-gray pd-b">
                                <img src="img/services/service-icon-4.png" alt="">
                                <h4>Yağ Yak</h4>
                                <p>
                                    Kardiyo antrenmanları yaparak düşük yağ oranına sahip olabilirsiniz.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-item bg-gray">
                                <img src="img/services/service-icon-1.png" alt="">
                                <h4>Güçlen</h4>
                                <p>
                                    Vücudunuzun hızını, çevikliğini ve kuvvetini arttırmak için güç antrenmanları yapmalısınız.
                                </p>
                            </div>
                            <div class="services-item pd-b">
                                <img src="img/services/service-icon-3.png" alt="">
                                <h4>Formunu Koru</h4>
                                <p>
                                    Sağlıklı beslenmeyi spor ile destekleyerek formunuzu koruyabilirsiniz.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Classes Section Begin -->
<section class="classes-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>SALONLAR</h2>
                </div>
            </div>
        </div>
        <div class="row classes-slider owl-carousel">
            @foreach($gyms as $gym)
                @if($gym->status == 1)
                    <div class="col-lg-4 col-md-6">
                        <a href="/salon/{{$gym->id}}">
                            <div class="single-class-item set-bg" data-setbg="uploads/gyms_images/{{$gym->photo}}">
                                <div class="si-text">
                                    <h4>{{$gym->name}}</h4>
                                    <span><i class="fa fa-home"></i> {{$gym->get_City->name}} - {{$gym->get_District->name}}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach

            @if($gyms == null)
                <div class="alert alert-danger">
                    Spor salonu bulunamadı!
                </div>
            @endif
        </div>
    </div>
</section>
<!-- Classes Section End -->

<!-- Banner Section Begin -->
<section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-text">
                    <h2>Şimdi spora başlayın</h2>
                    <p>
                        Hedefiniz her ne olursa olsun daha sağlıklı bir vücuda sahip olmak için sporu bir hobi haline getirmelisiniz.
                    </p>
                    <a href="/register" class="primary-btn banner-btn">Kaydol</a>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="img/banner-person.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->


@include('layouts.footer')
