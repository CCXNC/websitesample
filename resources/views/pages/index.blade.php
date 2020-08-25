@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <div class="jumbotron-heading">
                <h1>25 Years of Service with Pride and Spirit. Let Us Soar High Beyond Limit!</h1>
            </div>
        </div>
    </div>
    <section class="section home-1">
        <div class="container">
            <h2 id="sectionAnimate1">Naiintindihan namin ang inyong pangangailangan</h2>
            <hr class="hr">
            <p id="sectionAnimate2">Ang New Horizon Finance Corporation ay kasangga ng bawat Pilipinong Pensyonado sa panahon ng pangangailangan, maging ito ay sa pamilya, pangkabuhayan o sa panahon ng sakuna at pagkakasakit.
            <p id="sectionAnimate3">Tinatawagan ang lahat ng mga pensyonado (SSS o GSIS), maari kayong kumuha ng pension loan sa amin sa mababang interes lamang.</p>
        </div>
    </section>
    <section class="section home-2">
        <div class="container">
            <div class="home-2-wrapper">
                <div class="card">
                    <i class="fas fa-users fa-2x"></i>
                    <h3>About Us</h3>
                    <p>Nagbibigay kami sa mga natatanging indibidual ng responsableng negosyong pinansyal na serbisyo.</p>
                </div>
                <div class="card">
                    <i class="fas fa-hand-holding-heart fa-2x"></i>
                    <h3>Our Mission</h3>
                    <p>Itaas ang aming komunidad sa pamamagitan ng responsableng negosyong pinansyal na serbisyo, tulad ng pagpasilidad ng pautang, pansamantalang programa ng pag-alalay at paggabay sa pagpapalago ng negosyo.</p>
                </div>
                <div class="card">
                    <i class="fas fa-map-marker-alt fa-2x"></i>
                    <h3>Easily Accesible</h3>
                    <p>Sa ngayon mayroong bente kwatro (24) tanggapan na mahahanap sa madami lokasyon partikular Luzon.</p>
                </div>
            </section>
            </div>
        </div>
    <section class="section home-3">
        <div class="home-3-col">
            <div class="home-3-wrapper">
                <h3>Sa oras ng pangangailangan, nandito kami para sa inyo.</h3>
                <p>Bisitahin ang labing-walo (18) na NHFC at anim (6) na GTLIC, ang aming kapatid na kumpanya, na mga tanggapan sa Luzon.</p>
                <a class="btn btn-custom" href="{{ url('/branches') }}"><i class="fas fa-map-marker-alt"></i> Branches</a>
            </div>
        </div>
        <div class="home-3-col" id="map"></div>
    </section>
    <section class="section home-4">
        <div class="container">
            <h3>Send Us a Message</h3>
            <form class="form-horizontal" action="">
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Name (Required)</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <label class="control-label" for="telephone_mobile_number">Telephone or Mobile Number (Required)</label>
                    </div>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="telephone_mobile_number">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="message">Your Message (Required)</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="message" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <input class="btn btn-primary" type="submit" value="Send Message">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="section home-5 parallax-bg">
        <div class="container">
            <h3>Makipagusap sa amin</h3>
            <p>Tumawag, mag email, bumisita sa aming mga tanggapan at pagusapan natin ang inyong pangangailangan.</p>
        </div>
    </section>
@endsection