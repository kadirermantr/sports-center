@include('layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>İletişim</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info">
                    <h4>Contacts Us</h4>
                    <div class="contact-address">
                        <div class="ca-widget">
                            <div class="cw-icon">
                                <img src="img/icon/icon-1.png" alt="">
                            </div>
                            <div class="cw-text">
                                <h5>Lokasyon</h5>
                                <p>60-49 Road 11378 New York</p>
                            </div>
                        </div>
                        <div class="ca-widget">
                            <div class="cw-icon">
                                <img src="img/icon/icon-2.png" alt="">
                            </div>
                            <div class="cw-text">
                                <h5>Telefon</h5>
                                <p>+65 11.188.888</p>
                            </div>
                        </div>
                        <div class="ca-widget">
                            <div class="cw-icon">
                                <img src="img/icon/icon-3.png" alt="">
                            </div>
                            <div class="cw-text">
                                <h5>E-Posta</h5>
                                <p>example@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-form">
                    <h4>Mesaj Gönder</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Ad Soyad">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="E-Posta Adresi">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Mesajınız"></textarea>
                                <button type="submit">Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

@include('layouts.footer')
