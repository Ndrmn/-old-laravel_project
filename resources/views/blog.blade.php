@extends('layouts.app')

@section('title-block')

Blog

@endsection

@section('content')

<div class="header flex-column">

    <div class="blog">Blog</div>

    <div class="card" style="width: 50%;">
        <img src="https://img.freepik.com/premium-photo/kyiv-city-panorama-ukraine_173948-2145.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    
</div>
@endsection