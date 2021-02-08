@include('layouts.header')
<meta name="csrf-token" content="content">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Spor Salonları</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->



<!-- Classes Section Begin -->
<section class="classes-section classes-page spad">
    <div class="container">

        <form method="post" action="{{ route('search-gym') }}" class="register-form" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <select class="form-control" id="city-dropdown" required name="city_id">
                        <option value=" ">{{$selected}}</option>
                        <option value=" ">Tüm şehirler</option>
                        @foreach ($cities as $city)
                            <option value="{{$city->id}}" name="city_id">
                                {{$city->name}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Ara</button>
            </div>

        </form>

        <br /><br />

        <div class="row">
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

<!-- Footer Banner Section Begin -->
<section class="footer-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-banner-item set-bg" data-setbg="img/footer-banner/footer-banner-1.jpg">
                    <span>Yeni Üyelik</span>
                    <h2>7 gün ücretsiz</h2>
                    <p>Eğitimlerinizi bizimle tamamlayın ve güzel sonuçlara ulaşın.</p>
                    <a href="/register" class="primary-btn">Aramıza katıl!</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer-banner-item set-bg" data-setbg="img/footer-banner/footer-banner-2.jpg">
                    <span>İletişime Geç</span>
                    <h2>(123) 118 9999</h2>
                    <p>Bu yolculukta bizimle hareket ederek daha profosyonel ilerleyebilirsiniz!</p>
                    <a href="/register" class="primary-btn">Aramıza katıl!</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Banner Section End -->


@include('layouts.footer')
