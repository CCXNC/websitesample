@extends('layouts.app')

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="col-md-6">
                <h3>Loans</h3>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a class="active" href="{{ url('/about') }}">Loans</a></li>
                </ol>
            </div>
        </div>
    </section>
    <section class="section loans-1">
        <div class="container">
            <div class="col-md-4">
                <div class="title">
                    <h3>SSS/GSIS Loan</h3>
                    <hr class="hr">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, ipsum at! Animi incidunt ea recusandae hic explicabo iusto dolorum pariatur quam necessitatibus aliquid architecto veritatis aut maxime quisquam nemo non quidem quos doloribus modi obcaecati, blanditiis in! Aliquid corporis ullam hic, omnis et, dolores eius quo ab quaerat suscipit explicabo.</p>
            </div>
            <div class="col-md-4">
                <div class="title">
                    <h3>Salary Loan</h3>
                    <hr class="hr">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, ipsum at! Animi incidunt ea recusandae hic explicabo iusto dolorum pariatur quam necessitatibus aliquid architecto veritatis aut maxime quisquam nemo non quidem quos doloribus modi obcaecati, blanditiis in! Aliquid corporis ullam hic, omnis et, dolores eius quo ab quaerat suscipit explicabo.</p>
            </div>
            <div class="col-md-4">
                <div class="title">
                    <h3>Salary Loan</h3>
                    <hr class="hr">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, ipsum at! Animi incidunt ea recusandae hic explicabo iusto dolorum pariatur quam necessitatibus aliquid architecto veritatis aut maxime quisquam nemo non quidem quos doloribus modi obcaecati, blanditiis in! Aliquid corporis ullam hic, omnis et, dolores eius quo ab quaerat suscipit explicabo.</p>
            </div>
        </div>
    </section>
    <section class="section loans-2">
        <div class="container">
            <div class="title">
                <h3>Mga Kailangan na Dokumento</h3>
            </div>
            <ul>
                <li><span class="glyphicon glyphicon-ok"></span> ATM card o passbook ng pension account</li>
                <li><span class="glyphicon glyphicon-ok"></span> Valid ID (at least one goverment issued)</li>
                <li>
                    <span class="glyphicon glyphicon-ok"></span> Photocopy of either one of these proof or billing
                    <ul class="proof-of-billing">
                        <li>Electricity Bill</li>
                        <li>Water Bill</li>
                        <li>Cable Bill</li>
                        <li>Credit Bill</li>
                    </ul>
                </li>
                <li><span class="glyphicon glyphicon-ok"></span> Photocopy of marriage contract (for survivorship pension) and birth certificate of minor dependent(s)</li>
                <li><span class="glyphicon glyphicon-ok"></span> One (1) 2x2 ID Picture</li>
                <li><span class="glyphicon glyphicon-ok"></span> Bank statement at least 3 mos. from the day of inquiry </li>
                <li><span class="glyphicon glyphicon-ok"></span> Co-maker with valid ID and in legal age </li>
            </ul>
        </div>
    </section>
    <section class="section loans-3 parallax-bg">
        <div class="container">
            <h3>Makipagusap sa amin</h3>
            <p>Tumawag, mag email, bumisita sa aming mga tanggapan at pagusapan natin ang inyong pangangailangan.</p>
        </div>
    </section>
@endsection