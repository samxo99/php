@extends('Layout.app')
@section('content')

    <div style="width: 70vw; margin:10px auto; margin-bottom:20px; color: white">
        <form action="{{route('posts.update', $post->id)}}" method='POST'>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="Text" name="title" class="form-control" id="postTitle" aria-describedby="emailHelp"
                      value="{{old( 'title', $post->title)}}">
            </div>

            <div class="form-group">
                <label for="title">Post Text</label>
                <textarea name="text" class="form-control" id="postText">{{old( 'text', $post->text)}}
                </textarea>
            </div>

            <div class="form-group">
                <label for="title">Post Author</label>
                <input type="Text" name="author" class="form-control" id="postAuthor" aria-describedby="emailHelp"
                       placeholder="Enter Post Author" value="{{old( 'author', $post->author)}}">
            </div>

            <div style="display: flex; flex-direction: row; justify-content: space-between ">
                <button type="submit" class="btn  mb-2">Add Post</button>
                <button type="button" class="btn  mb-2">
                    <a href="/" style="color: black ">Back</a></button>
            </div>

        </form>
    </div>

    @endsection

