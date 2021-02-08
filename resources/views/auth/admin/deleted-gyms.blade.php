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
                        <a class="list-group-item list-group-item-action" href="/admin/gyms">Salonlar</a>
                        <a class="list-group-item list-group-item-action active" href="/admin/deleted-gyms">Silinmiş Salonlar</a>
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
                                    <th scope="col">Sorumlu</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($gyms as $gym)
                                    <tr>
                                        <td>{{$gym->id}}</th>
                                        <td>{{$gym->name}}</td>
                                        <td>{{$gym->get_City->name}}</td>
                                        <td>{{$gym->get_District->name}}</td>
                                        <td>{{$gym->user[0]->name}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <br />

                            <div class="d-flex justify-content-center">
                                {!! $gyms ->links() !!}
                            </div>

                            <br />

                            @if(session()->has('message'))
                                <div class="alert alert-danger">
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
