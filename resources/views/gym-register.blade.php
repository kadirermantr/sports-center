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
                    <h2>Salon Başvurusu</h2>
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
                        <form method="post" action="{{ route('gym-save') }}" class="register-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <input id="name" type="text" placeholder="Salon Adı" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                                </div>

                                <div class="col-lg-6">
                                    <label for="country">Şehir</label>
                                    <select class="form-control" id="city-dropdown" required name="city_id">
                                        <option value="">Şehir seçiniz</option>
                                        @foreach ($cities as $city)
                                            <option value="{{$city->id}}">
                                                {{$city->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <label for="district">İlçe</label>
                                    <select class="form-control" id="district-dropdown" required name="district_id">
                                        <option value=""></option>
                                    </select>
                                    <br />
                                </div>

                                <div class="col-lg-12">
                                    <label for="photo">Fotoğraf seçiniz</label>
                                    <input id="photo" type="file" placeholder="Fotoğraf" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required>
                                </div>

                                <div class="col-lg-12">
                                    <label for="capacity">Kapasite</label>
                                    <select class="form-control" id="capacity" name="capacity" required >
                                        <option value="">Seçim yapınız</option>
                                        <option value="1">0-50</option>
                                        <option value="2">50-100</option>
                                        <option value="3">100+</option>
                                    </select>
                                    <br />
                                </div>

                                <div class="col-lg-12">
                                    <label for="work_days">Çalışma Günleri</label>
                                    <select class="form-control" id="work_days" name="work_days" required>
                                        <option value="">Seçim yapınız</option>
                                        <option value="1">Her gün</option>
                                        <option value="2">Hafta içi her gün</option>
                                        <option value="3">Pazartesi-Cumartesi</option>
                                    </select>
                                    <br />
                                </div>

                                <div class="col-lg-12">
                                    <label for="work_hours">Çalışma Saatleri</label>
                                    <select class="form-control" id="work_hours" name="work_hours" required >
                                        <option value="">Seçim yapınız</option>
                                        <option value="1">10:00 - 18:00</option>
                                        <option value="2">10:00 - 19:00</option>
                                        <option value="3">10:00 - 20:00</option>
                                    </select>
                                    <br />
                                </div>
                            </div>

                            <button type="submit" class="register-btn"> {{ __('Başvur') }} </button>
                        </form>

                        @foreach ($errors->all() as $error)
                            <br />
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach
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

<script>
    $(document).ready(function() {
        $('#city-dropdown').on('change', function() {
            var city_id = this.value;
            $("#district-dropdown").html('');
            $.ajax({
                url:"{{url('get-districts-by-city')}}",
                type: "POST",
                data: {
                    city_id: city_id,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(result){
                    $('#district-dropdown').html('<option value="">İlçe seçiniz</option>');
                    $.each(result.districts,function(key,value){
                        $("#district-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                }
            });
        });
    });
</script>
@include('layouts.footer')
