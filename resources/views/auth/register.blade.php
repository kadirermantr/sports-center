@include('layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Kaydol</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Register Section Begin -->
<section class="register-section classes-page spad">
    <div class="container">
        <div class="classes-page-text">
            <div class="row">
                <div class="col-lg-8">
                    <div class="register-text">

                        <form method="POST" action="{{ route('register') }}" class="register-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <input id="name" type="text" placeholder="Ad" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                                </div>

                                <div class="col-lg-12">
                                    <input id="surname" type="text" placeholder="Soyad" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname">
                                </div>

                                <div class="col-lg-12">
                                    <input id="nickname" type="text" placeholder="Kullanıcı Adı" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname">
                                </div>

                                <div class="col-lg-12">
                                    <input id="nickname" type="email" placeholder="E-Posta Adresi" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>

                                <div class="col-lg-12">
                                    <input id="password" type="password" placeholder="Parola" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password">
                                </div>

                                <div class="col-lg-12">
                                    <input id="password-confirm" type="password" placeholder="Porolayı onayla" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <button type="submit" class="register-btn"> {{ __('Kaydol') }} </button>
                        </form>

                        @foreach ($errors->all() as $error)
                            <br />
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach

                        <hr>
                        Zaten üye misiniz? <a href="/login">Oturum açın</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="register-pic">
                        <img src="img/register-pic.jpg" alt="">
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- Register Section End -->



@include('layouts.footer')
