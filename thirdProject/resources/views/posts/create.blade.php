@extends('Layout.app')
@section('content')
<div style="width: 70vw; margin:10px auto; margin-bottom:20px; color: white">

    <form action="{{route(('posts.store'))}}" method='POST'>
        @csrf
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="Text" name="title" class="form-control" id="postTitle" aria-describedby="emailHelp"
                   placeholder="Enter Post Title">
        </div>

        <div class="form-group">
            <label for="title">Post Text</label>
            <textarea type="Text" name="text" class="form-control" id="postText" placeholder="Enter Post Text"
                      aria-describedby="emailHelp"
            > </textarea>
        </div>

        <div class="form-group">
            <label for="title">Post Author</label>
            <input type="Text" name="author" class="form-control" id="postAuthor" aria-describedby="emailHelp"
                   placeholder="Enter Post Author">

        </div>
        <div style="display: flex; flex-direction: row; justify-content: space-between ">
            <button type="submit" class="btn  mb-2">Add Post</button>
            <button type="button" class="btn  mb-2">
                <a href="/" style="color: black ">Back</a></button>
        </div>
    </form>
</div>

@endsection
