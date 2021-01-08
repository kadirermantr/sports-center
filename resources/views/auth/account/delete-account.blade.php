@include('layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Hesabı Sil</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Gym Award Section Begin -->
<section class="gym-award spad">

    <form method="POST" action="{{route('destroy', $users->id)}}">
        @csrf

        <div class="container light-style flex-grow-1 container-p-y">

            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action" href="/account">Genel</a>
                            <a class="list-group-item list-group-item-action" href="/change-password">Parolayı Değiştir</a>
                            <a class="list-group-item list-group-item-action active" href="/delete-account">Hesabı Sil</a>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">

                                <hr class="border-light m-0">

                                <div class="card-body">
                                    Bu sayfadan hesabınızı kalıcı olarak silebilirsiniz.<br /><br />
                                    Hesabınızı sildikten sonra yeniden etkinleştiremez veya hiçbir bilgiyi geri getiremezsiniz.
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="text-right mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Hesabı sil
                </button>

                <!-- Modal -->
                <div class="modal fade text-left" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Dikkat!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Hesabınızı silmek istediğinize emin misiniz?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal</button>
                                <button type="submit" class="btn btn-primary">Hesabı sil</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </form>

</section>
<!-- Gym Award Section End -->



@include('layouts.footer')
