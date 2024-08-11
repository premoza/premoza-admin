@extends('layouts.app')

@section('pageTitle', 'Overview')

@section('content')
<div>
    <h1>Overview</h1>
</div>
<div class="row">
    <div class="row mb-3 mb-md-0">
         <div class="col col-md-3 col-lg-2 col-xl-1">
            <span class="d-block">Sales</span>
            <span class="fs-1 text-primary">500K</span>
        </div>
        <div class="col col-md-3 col-lg-2 col-xl-1">
            <span class="d-block">Revenue</span>
            <span class="fs-1 text-primary">500K</span>
        </div>
        <div class="col col-md-3 col-lg-2 col-xl-1">
            <span class="d-block">Property Listing</span>
            <span class="fs-1 text-primary">345</span>
        </div>
        <div class="col col-md-3 col-lg-2 col-xl-1">
            <span class="d-block">Net Worth</span>
            <span class="fs-1 text-primary">3.5M</span>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body">
                <canvas id="sales"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card">
            <div class="card-body">
                <canvas id="revenue"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection