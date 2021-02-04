  
@extends("layout.layouts")
@section("title","Home")


@section("main")

<div class="container">
        <div class="row">
                @foreach ($data as $post )
                <div class="col-4">
                    <div class="card mb-5" style="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Autore: {{ $post->author}}</h6><hr class="my-1">
                            <h6 class="card-subtitle mb-2 text-muted">Autore: {{ $post->author}}</h6><hr class="my-1">
                            <h6 class="card-subtitle mb-2 text-muted">Descrizione: <br> {{ $post->postInf->description}}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
                
  

            
        </div>
    </div>

@endsection