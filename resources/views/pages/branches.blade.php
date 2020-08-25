@extends('layouts.app')

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="col-md-6">
                <h3>Branches</h3>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a class="active" href="{{ url('/branches') }}">Branches</a></li>
                </ol>
            </div>
        </div>
    </section>
    <div class="section branches-1">
        <div class="container">
            <div class="row-fluid">
                <div class="col-md-6">
                    <p><span>New Horizon Finance Corporation (NHFC) </span> is currently incorporated in San Juan, Metro Manila. Operationally, we currently have eighteen (18) <span>NHFC</span> branches located nationwide, primarily focused in Luzon. In addition, we have six (6) <span>Golden Teasure Lending Investors Corporation (GTLIC)</span> branches concentrated in North and Central Luzon.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="section branches-2">
        <div class="container">
            @foreach($branches as $branch)
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-primary panel-branch">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $branch->name }}</h3>
                        </div>
                        <div class="panel-body p-body-hidden">
                            <ul class="branch">
                                <li>Address: {{ $branch->address }}</li>
                                <li>Tel No: {{ $branch->telephone_no }}</li>
                                <li>Mobile No: {{ $branch->cellphone_no }}</li>
                                <li>Fax No: {{ $branch->fax_no }}</li>
                                <li>Office-in-Charge: {{ $branch->officer_in_charge }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="section branches-3 parallax-bg">
        <div class="container">
            <h3>Makipagusap sa amin</h3>
            <p>Tumawag, mag email, bumisita sa aming mga tanggapan at pagusapan natin ang inyong pangangailangan.</p>
        </div>
    </section>
@endsection