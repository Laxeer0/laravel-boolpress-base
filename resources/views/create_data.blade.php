@extends("layout.layouts")
@section("title","Create Data")


@section("main")
<div class="container">
    <div class="jumbotron py-4">
        <h1 class="">Create Guest Detail</h1>
        <hr class="my-3">
        <form method="post" action="{{ route('posts.store') }}">
        @csrf
            <div class="form-group row">
                <label for="inputPostTitle" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputPostTitle" name="inputPostTitle" placeholder="Full Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPostAuthor" class="col-sm-2 col-form-label">Author</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputPostAuthor" name="inputPostAuthor" placeholder="Credit Card">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputGuestRoom" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select name="inputPostCategory" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPostDesc" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputPostDesc" name="inputPostDesc" placeholder="Credit Card">
                </div>
            </div>
           
            <div class="form-group row">
                <label for="inputGuestRoom" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                        @foreach($tags as $tag)
                            <input type="checkbox" id="{{ $tag->id }}" name="inputPostTag[]" value="{{$tag->id}}">
                            <label for="{{$tag->id}}">{{ $tag->name }}</label>
                        @endforeach
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection