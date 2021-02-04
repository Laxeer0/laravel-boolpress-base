  
@extends("layout.layouts")
@section("title","Dettagli - $data->title")


@section("main")

<div class="container">
    <div class="jumbotron">
        <a href="/" class="btn btn-danger p-3"><i class="bi bi-arrow-90deg-left"></i></a>
        <h1 class="text-align">{{ $data->title }}
        <h3>Author: {{$data->author}}</h3>
        <h5>Category: {{ $data->postCat->title }}
        <hr class="my-3">
        <h6>More Details:</h6>
        <p>{{$data->postinf->description}}</p>
        
        <p>Tags: 
            @foreach($data->postTag as $tag) 
                {{$tag->name}}
            @endforeach
        </p>
    </div>
</div>

@endsection