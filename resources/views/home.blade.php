  
@extends("layout.layouts")
@section("title","Home")


@section("main")

            <table class="table">
              <thead class="thead-custom text-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
              </thead>
            <tbody>
                @foreach ($data as $post )
                    <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->author }}</td>
                    <td class="d-flex justify-content-end">
                            <a href="{{route('posts.show', $post->id)}}" class="btn btn-info">Reserved Details</a>
                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-warning mx-5">Edit</a>
                            <form method="post" class="d-inline"action="{{route('posts.destroy', $post->id)}}">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Remove">
                            </form></td>
                    </tr>
               
                @endforeach
                                
                </tbody>
                </table>
                            

@endsection