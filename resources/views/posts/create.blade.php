@extends('../main.app')

@section('title-block')

Add post

@endsection

@section('content')

<div class="header flex-column">

    <div class="blog">Add post</div>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach()
        </ul>
    </div>
    @endif

    <form class="add-form" action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <p>Title:</p>
        <input class="form_laravel" type="text" name="name" id="name" placeholder="">
        <p>Text:</p>
        <textarea class="form_laravel" type="textarea" name="full_text" id="full_text" placeholder=""></textarea>
        <p>Picture:</p>
        <input type="file" name="image" id="image" accept="image/*">
        <button class="btnSubm" type="submit">Save</button>
        
    </form>
    
</div>

@endsection