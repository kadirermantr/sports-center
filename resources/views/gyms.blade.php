@include('layouts.header')

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
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>XXXXXXXXXXXXXXXXXX</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($gyms as $gym)
            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="single-class-item set-bg" data-setbg="uploads/gyms_images/{{$gym->photo}}">
                        <div class="si-text">
                            <h4>{{@$gym->name}}</h4>
                            <span><i class="fa fa-home"></i> {{$gym->get_City->name}} - {{$gym->get_District->name}}</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
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
                    <h2>7 days for free</h2>
                    <p>Complete the training sessions with us, surely you will be happy</p>
                    <a href="#" class="primary-btn">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer-banner-item set-bg" data-setbg="img/footer-banner/footer-banner-2.jpg">
                    <span>İletişime Geç</span>
                    <h2>09 746 204</h2>
                    <p>If you trust us on your journey they dark sex does not disappoint you!</p>
                    <a href="#" class="primary-btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Banner Section End -->

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
