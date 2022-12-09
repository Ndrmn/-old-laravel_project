@extends('../main.app')

@section('title-block')

Blog

@endsection

@section('content')

<div class="header flex-column">

    <div class="blog">Blog</div>

    @foreach($data as $elem)

    <div class="card" style="width: 50%; margin-bottom: 20px;">
        <img src="{{asset('/storage/' . $elem->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$elem->name}}</h5>
            <a href="{{asset('/posts/' . $elem->id)}}" class="btn btn-primary">More</a>
        </div>
    </div>

    @endforeach
    
</div>
@endsection