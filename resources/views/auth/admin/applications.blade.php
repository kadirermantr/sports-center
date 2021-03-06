@include('layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{URL::to('/')}}/img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Yönetici Paneli</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Gym Award Section Begin -->
<section class="gym-award spad">

    <div class="container light-style flex-grow-1 container-p-y">

        @include('auth.admin.layouts.header')

        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" href="/admin/applications">Bekleyen Başvurular</a>
                        <a class="list-group-item list-group-item-action" href="/admin/approved-applications">Onaylanmış Başvurular</a>
                        <a class="list-group-item list-group-item-action" href="/admin/rejected-applications">Reddedilmiş Başvurular</a>
                        <a class="list-group-item list-group-item-action" href="/admin/deleted-applications">Silinmiş Başvurular</a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show account-text">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Ad</th>
                                    <th scope="col">Şehir</th>
                                    <th scope="col">İlçe</th>
                                    <th scope="col">Kapasite</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($applications as $application)
                                    <tr>
                                        <td>{{$application->id}}</th>
                                        <td>{{$application->name}}</td>
                                        <td>{{$application->get_City->name}}</td>
                                        <td>{{$application->get_District->name}}</td>

                                        @if($application->capacity == 1)
                                            <td>0-50</td>
                                        @elseif($application->capacity == 2)
                                            <td>50-100</td>
                                        @else
                                            <td>100+</td>
                                        @endif

                                        <td><a href="{{route('accept.application', $application->id)}}"><i class="fa fa-check"></i></a></td>
                                        <td><a href="{{route('reject.application', $application->id)}}"><i class="fa fa-times"></i></a></td>
                                        <td><a href="{{route('delete.application', $application->id)}}"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <br />

                            <div class="d-flex justify-content-center">
                                {!! $applications ->links() !!}
                            </div>

                            <br />

                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

</section>
<!-- Gym Award Section End -->

@include('layouts.footer')
