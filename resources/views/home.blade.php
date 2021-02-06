  
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
                            <h6 class="card-subtitle mb-2 text-muted">Autore: {{ $post->author}}</h6>
                            
                            <a href="{{route('posts.show', $post->id)}}" class="btn btn-info">Reserved Details</a>
                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-warning">Edit</a>
                            <form method="post" action="{{route('posts.destroy', $post->id)}}">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Remove">
                            </form>

                        </div>
                    </div>
                </div>
                @endforeach
                
            
        </div>
    </div>

@endsection