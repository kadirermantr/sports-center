@include('layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Oturum Aç</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Register Section Begin -->
<section class="register-section">
    <div class="container">
        <div class="classes-page-text">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="register-text">

                        <form method="POST" action="{{ route('login') }}" class="register-form">
                            @csrf

                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <input id="email" type="email" placeholder="E-Posta Adresi" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>

                                <div class="col-lg-12">
                                    <input id="password" type="password" placeholder="Parola" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>

                                <div class="col-lg-12">
                                    @foreach ($errors->all() as $error)
                                        <br />
                                        <div class="alert alert-danger">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                </div>


                                <div class="col-lg-12">
                                    <button type="submit" class="register-btn"> {{ __('Oturum Aç') }} </button>
                                </div>
                            </div>

                        </form>
                        <hr class="alt_cizgi">

                        <a href="{{ url('/forgot-password') }}">Parolamı unuttum</a><br />
                        Bize katılmak ister misiniz? <a href="/register">Şimdi kaydolun.</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- Register Section End -->



@include('layouts.footer')
