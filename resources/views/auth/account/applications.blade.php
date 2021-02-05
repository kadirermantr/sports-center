@include('layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Başvurularım</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Gym Award Section Begin -->
<section class="gym-award spad">

    <div class="container light-style flex-grow-1 container-p-y">

        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active " href="/account">Genel</a>
                        <a class="list-group-item list-group-item-action" href="/change-password">Parolayı Değiştir</a>
                        <a class="list-group-item list-group-item-action" href="/delete-account">Hesabı Sil</a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show">

                            <hr class="border-light m-0">

                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Ad</th>
                                        <th scope="col">Şehir</th>
                                        <th scope="col">İlçe</th>
                                        <th scope="col">Kapasite</th>
                                        <th scope="col">Durum</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($applications as $application)
                                        <tr>
                                            <td>{{$application->id}}</th>
                                            <td>{{$application->name}}</td>
                                            <td>{{$application->get_City->name}}</td>
                                            <td>{{$application->get_District->name}}</td>
                                            <td>{{$application->capacity}}</td>
                                            @if($application->status == 0)
                                                <td>Değerlendiriliyor</td>
                                            @elseif($application->status == 1)
                                                <td>Onaylandı</td>
                                            @else
                                                <td>Reddedildi</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <br />

                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</section>
<!-- Gym Award Section End -->



@include('layouts.footer')
