<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>teeeest</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form>
                <div class="form-group">
                    <label for="country">Şehir</label>
                    <select class="form-control" id="city-dropdown">
                        <option value="">Şehir seçiniz</option>
                        @foreach ($cities as $city)
                            <option value="{{$city->id}}">
                                {{$city->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="district">İlçe</label>
                    <select class="form-control" id="district-dropdown">
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>

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
</body>
</html>
