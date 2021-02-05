@include('layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{URL::to('/')}}/img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Admin</h2>
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
                        <a class="list-group-item list-group-item-action" href="/admin/users">Üyeler</a>
                        <a class="list-group-item list-group-item-action active" href="/admin/deleted-users">Silinmiş Üyeler</a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show account-text">
                            <p>
                                Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean pretium
                                sollicitudin, nascetur auci elit consequat ipsutissem niuis sed odio sit amet nibh vulputate
                                cursus a amet.
                            </p>

                            <br />
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Ad</th>
                                    <th scope="col">Soyad</th>
                                    <th scope="col">Kullanıcı Adı</th>
                                    <th scope="col">E-Posta</th>
                                    <th scope="col">Rol</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->surname}}</td>
                                        <td>{{$user->nickname}}</td>
                                        <td><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
                                        <td>{{$user->role}}</td>
                                        <td><a href="{{route('admins.update', $user->id)}}" data-toggle="modal" data-target="#exampleModalCenter">
                                            <i class="fa fa-edit"></i>
                                        </a></td>

                                        <td><a href="{{route('undelete.users', $user->id)}}"><i class="fa fa-undo"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <br />

                            <div class="d-flex justify-content-center">
                                {!! $users ->links() !!}
                            </div>

                            <br />
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
