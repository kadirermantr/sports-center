@include('layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Hesabım</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Gym Award Section Begin -->
<section class="gym-award spad">

    <form method="POST" action="{{route('users.update', $user->id)}}">
        @csrf
        @method('PUT')

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
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="text-right mt-3">
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </div>

        </div>
    </form>

</section>
<!-- Gym Award Section End -->



@include('layouts.footer')
