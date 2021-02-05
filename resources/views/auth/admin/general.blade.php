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
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active show account-text">

                            <p>
                                Bu sayfadan çeşitli istatistikleri görüntüleyebilirsiniz.
                            </p>

                        </div>
                    </div>
                </div>


            </div>

            <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

            <div class="container bootstrap snippets bootdey">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="circle-tile ">
                            <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded"> Üyeler</div>
                                <div class="circle-tile-number text-faded ">{{$member}}</div>
                                <a class="circle-tile-footer" href="/admin/users">Tüm üyeler <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="circle-tile ">
                            <a href="#"><div class="circle-tile-heading red"><i class="fa fa-building fa-fw fa-3x"></i></div></a>
                            <div class="circle-tile-content red">
                                <div class="circle-tile-description text-faded"> Başvurular </div>
                                <div class="circle-tile-number text-faded ">{{$application}}</div>
                                <a class="circle-tile-footer" href="/admin/applications">Tüm başvurular <i class="fa fa-chevron-circle-right"></i></a>
                         </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="circle-tile ">
                            <a href="#"><div class="circle-tile-heading dark-gray "><i class="fa fa-envelope fa-fw fa-3x"></i></div></a>
                            <div class="circle-tile-content dark-gray">
                                <div class="circle-tile-description text-faded"> Spor Salonları </div>
                                <div class="circle-tile-number text-faded ">{{$gym}}</div>
                                <a class="circle-tile-footer" href="/admin/gyms">Tüm salonlar <i class="fa fa-chevron-circle-right"></i></a>
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
