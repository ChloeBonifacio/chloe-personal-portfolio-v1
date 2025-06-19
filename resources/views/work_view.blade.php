@extends('layout.layout')

@section('title', 'Work Title')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/css/work.css') }}">
@endsection

@section('content')
<div class="row my-5 px-lg-5">
    <div class="col-lg-5">
        <h1 class="giant-title c-primary mb-0">Work Title</h1>
        @foreach (range(1,3) as $x)
            <label class="work-tag">Sample</label>
        @endforeach
    </div>
</div>

<div class="row px-lg-5">
    <div class="col-lg-5">

        

        <p class="text-bold">ABOUT THIS PROJECT</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>

    </div>

    <div class="col-lg-7 scrollable-content d-flex flex-column gap-3">
        <img src="{{ URL::asset('/images/jobposting.png') }}" class="work-img" alt="">
        <img src="{{ URL::asset('/images/jobposting.png') }}" class="work-img" alt="">
    </div>
</div>



@endsection

    