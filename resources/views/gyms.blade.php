@include('layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Spor Salonları</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Classes Section Begin -->
<section class="classes-section classes-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>XXXXXXXXXXXXXXXXXX</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($gyms as $gym)
            <div class="col-lg-4 col-md-6">
                <a href="#">
                    <div class="single-class-item set-bg" data-setbg="img/classes/{{$gym->photo}}">
                        <div class="si-text">
                            <h4>{{@$gym->name}}</h4>
                            <span><i class="fa fa-home"></i> {{$gym->get_City->name}} - {{$gym->get_District->name}}</span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- Classes Section End -->

<!-- Classes Timetable Section Begin -->
<section class="classes-timetable spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Class Timetable</h2>
                </div>
                <div class="nav-controls">
                    <ul>
                        <li class="active" data-tsfilter="all">Hepsi</li>
                        <li data-tsfilter="gym">Gym</li>
                        <li data-tsfilter="crossfit">Crossfit</li>
                        <li data-tsfilter="cardio">Cardio</li>
                        <li data-tsfilter="body">Body</li>
                        <li data-tsfilter="yoga">Yoga</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="schedule-table">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="workout-time">10.00</td>
                            <td class="hover-bg ts-item" data-tsmeta="gym">
                                <h6>Gym</h6>
                                <span>10.00 - 11.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="yoga">
                                <h6>Yoga</h6>
                                <span>10.00 - 12.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="body">
                                <h6>Body</h6>
                                <span>10.00 - 12.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="cardio">
                                <h6>Cardio</h6>
                                <span>10.00 - 11.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">14.00</td>
                            <td></td>
                            <td class="hover-bg ts-item">
                                <h6>Running</h6>
                                <span>14.00 - 16.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item">
                                <h6>Box</h6>
                                <span>14.00 - 15.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="gym">
                                <h6>Gym</h6>
                                <span>14.00 - 16.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">16.00</td>
                            <td class="hover-bg ts-item" data-tsmeta="cardio">
                                <h6>Cardio</h6>
                                <span>16.00 - 18.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="gym">
                                <h6>Gym</h6>
                                <span>16.00 - 19.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="yoga">
                                <h6>Yoga</h6>
                                <span>16.00 - 18.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="gym">
                                <h6>Gym</h6>
                                <span>16.00 - 20.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="workout-time">18.00</td>
                            <td class="hover-bg ts-item">
                                <h6>Box</h6>
                                <span>18.00 - 22.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="body">
                                <h6>Body</h6>
                                <span>18.00 - 20.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <h6>Crossfit</h6>
                                <span>18.00 - 21.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="cardio">
                                <h6>Cardio</h6>
                                <span>18.00 - 22.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="workout-time">20.00</td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="gym">
                                <h6>Gym</h6>
                                <span>20.00 - 12.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td class="hover-bg ts-item" data-tsmeta="body">
                                <h6>Body</h6>
                                <span>20.00 - 21.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="cardio">
                                <h6>Cardio</h6>
                                <span>20.00 - 22.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                            <td></td>
                            <td class="hover-bg ts-item" data-tsmeta="crossfit">
                                <h6>Crossfit</h6>
                                <span>20.00 - 21.00</span>
                                <div class="trainer-name">
                                    John Smith
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Trainer Table Schedule Section End -->

<!-- Footer Banner Section Begin -->
<section class="footer-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-banner-item set-bg" data-setbg="img/footer-banner/footer-banner-1.jpg">
                    <span>Yeni Üyelik</span>
                    <h2>7 days for free</h2>
                    <p>Complete the training sessions with us, surely you will be happy</p>
                    <a href="#" class="primary-btn">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer-banner-item set-bg" data-setbg="img/footer-banner/footer-banner-2.jpg">
                    <span>İletişime Geç</span>
                    <h2>09 746 204</h2>
                    <p>If you trust us on your journey they dark sex does not disappoint you!</p>
                    <a href="#" class="primary-btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Banner Section End -->

@include('layouts.footer')
