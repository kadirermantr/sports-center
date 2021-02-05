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
                        <a class="list-group-item list-group-item-action active" href="/admin/users">Üyeler</a>
                        <a class="list-group-item list-group-item-action" href="/admin/deleted-users">Silinmiş Üyeler</a>
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

                            @if(($user_count == 0))
                                Hiç üye yok!

                            @else
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
                                            <td><a href="{{route('delete.user', $user->id)}}"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>

                                <br />

                                <div class="d-flex justify-content-center">
                                    {!! $users ->links() !!}
                                </div>

                                <br />

                                <!-- Modal -->
                                <div class="modal fade text-left" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{route('admins.update', $user->id)}}">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="container light-style flex-grow-1 container-p-y">
                                                        <div class="form-group">
                                                            <label class="form-label">Ad</label>
                                                            <input name="name" type="text" class="form-control mb-1" value="{{$user->name}}" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label">Soyad</label>
                                                            <input name="surname" type="text" class="form-control mb-1" value="{{$user->surname}}" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label">Kullanıcı Adı</label>
                                                            <input name="nickname" type="text" class="form-control mb-1" value="{{$user->nickname}}" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="form-label">E-Posta Adresi</label>
                                                            <input name="email" type="text" class="form-control mb-1" value="{{$user->email}}" required>
                                                        </div>

                                                        @foreach ($errors->all() as $error)
                                                            <div class="alert alert-danger">
                                                                {{ $error }}
                                                            </div>
                                                        @endforeach

                                                        @if(session()->has('message'))
                                                            <div class="alert alert-success">
                                                                {{ session()->get('message') }}
                                                            </div>
                                                        @endif

                                                        <div class="text-right mt-3">
                                                            <button type="submit" class="btn btn-primary">Kaydet</button>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
