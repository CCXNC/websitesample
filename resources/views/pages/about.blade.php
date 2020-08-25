@extends('layouts.app')

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="col-md-6">
                <h3>About Us</h3>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a class="active" href="{{ url('/about') }}">About Us</a></li>
                </ol>
            </div>
        </div>
    </section>
    <section class="section about-1">
        <div class="container">
            <div class="row">
                <h3>Our History</h3>
                <hr class="hr">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="http://localhost/newhorizon/public/images/about-img.jpg">
                </div>
                <div class="col-md-6">
                    <p><span>Valiente Lending Investors Corporation</span> was incorporated in October 17, 1994. It is a Lending company, which serve SSS and GSIS pensioners since its initial operation on October 1994, the company has established several branches in Metro Manila and in various key cities in the provinces like Baguio City, Dagupan City and Naga City.</p>
                    <p>As part of the SEC requirements under Republic Act of 8556, otherwise known as the Finance Company Act of 1998, that all the Lending Investors shall convert into Financing Corporation, the officers of Valiente Lending Investors Corporation decided to convert into Financing Corporation; as a result, changing its name to <span>New Horizon Finance Corporation (NHFC)</span>. It is also has sister company, <span>Golden Treasure Lending Investors Corporation (GTLIC)</span>, which was incorporated in October 5, 2006. It has six branches over Metro Manila and Luzon.</p>
                    <p>The primary purpose of this Corporation is to engage in the extending of the credit facilities to consumers by the direct lending (SSS, GSIS, Salary Loan).</p>
                    <p>As of 2015, <span>NHFC</span> has 18 branches all over the key cities and provinces. Its main office is located at #606 Pinaglabanan Street, San Juan City, Metro Manila.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section about-2">
        <div class="container">
            <h2>Direct Lending</h2>
            <p>Granting of loans, a most of which is focused on SSS pensioners. Loans granted account for 80% of borrowers monthly pension, spread over a period of six (6), nine (9) or twelve (12) months.</p>
            <p>In addition, loans are accompanied by reasonable interest rates and charged. Repayment of loans is performed through borrower's ATMs, which are sureendered through SPA.</p>
        </div>
    </section>
    <section class="section about-3">
        <div class="about-3-wrapper">
            <div class="card card-light">
                <div class="title">
                    <h3>Our Credo</h3>
                    <hr class="hr">
                </div>
                <ul>
                    <li><span>We are responsible to our customers.</span> In meeting our customers needs, everything we do must exude the highest quality. We must constantly strive to serve our customers promptly and accurately.</li>
                    <li><span>We are responsible to our employees.</span> Our employees are our key resources; therefore, they should all be treated with respect. Employees are also expected to treat their superiors, peers and subordinates with respect and courtesy.</li>
                    <li><span>We operate only with highest level of integrity.</span> Everyone, from the top-down, should abide by strict rules, in terms of running our business. Only through integrity can we ensure that we foster professionalism in the workplace. We believe that only direct professionalism will earn the trust of our customers, and furthermore, develop personal pride as being a part of New Horizon Finance Corporation.</li>
                    <li><span>We are highly adaptive to our customers, employees and shareholder needs.</span> By exerting our efforts to understanding your personal and professional needs, we are better equipped to providing incentives that, we believe, are fair and adequate!</li>
                    <li><span>Loyal to our philosophy.</span> We only employ people that agree to and abide by our corporate philosophy. Only through this can ensure that the team of people behind us works tireless to ensure that the process of obtaining a money lending facility with us is seamless and convenient. This is an unbending philosophy and corporate that will never compromise.</li>
                </ul>
            </div>
            <div class="card">
                <div class="title">
                    <h3>Our Mission</h3>
                    <hr class="hr">
                </div>
                <ul>
                    <li>To engage in the extending of credit facilities to consumers by Direct Lending.</li>
                    <li>Focus in understanding our customer's needs, assessing our products and services, and aligning them with the right package! We will not offer products or services that we believe will not meet our customer's financial needs.</li>
                    <li>Handle all our financial accounts with the utmost professionalism and proficiency to gain and maintain the trust of our customers.</li>
                    <li>Uplift the community we operate in by providing deserving individuals with responsible financial business services, such as credit facilities. temporary mentorship programs and guidance on sustainable business practices.</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section about-4 parallax-bg">
        <div class="container">
            <h3>Makipagusap sa amin</h3>
            <p>Tumawag, mag email, bumisita sa aming mga tanggapan at pagusapan natin ang inyong pangangailangan.</p>
        </div>
    </section>
@endsection