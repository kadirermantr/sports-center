@include('layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Parolamı Unuttum</h2>
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
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}" class="register-form">
                            @csrf

                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <input id="email" type="email" placeholder="E-Posta Adresi" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="register-btn"> {{ __('Şifre sıfırlama bağlantısı gönder') }} </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- Register Section End -->



@include('layouts.footer')
