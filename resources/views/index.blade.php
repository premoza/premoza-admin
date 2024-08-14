@extends('layouts.app')

@section('pageTitle', 'Overview')

@section('content')
<h1 id="overview">Overview</h1>

<div class="p-3">
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
                <span class="d-block">Listing</span>
                <span class="fs-1 text-primary">345</span>
            </div>
            <div class="col col-md-3 col-lg-2 col-xl-1">
                <span class="d-block">Net Worth</span>
                <span class="fs-1 text-primary">3.5M</span>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="border rounded">
                <canvas class="p-3" id="test1"></canvas>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="border rounded">
                <canvas class="p-3" id="test2"></canvas>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="border rounded">
                <canvas class="p-3" id="test3"></canvas>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="border rounded">
                <canvas class="p-3" id="test4"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection