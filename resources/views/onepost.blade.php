@extends('layouts.app')

@section('title-block')

{{$data->name}}

@endsection

@section('content')

<div class="header flex-column">

    <div class="blog">Blog</div>

    <!-- @foreach($data as $elem) -->

    <div class="card" style="width: 50%; margin-bottom: 20px;">
        <img src="{{asset('/storage/' . $data->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$data->name}}</h5>
            <p class="card-text">{{$data->fulltext}}</p>
            <!-- <a href="{{route('onepost'), $elem->id}}" class="btn btn-primary">More</a> -->
        </div>
    </div>

    <!-- @endforeach -->
    
</div>
@endsection