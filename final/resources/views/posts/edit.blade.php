@extends('Layout.app')
@section('content')

    <div style="width: 70vw; margin:10px auto; margin-bottom:20px; color: white">
        <form action="{{route('posts.update', $post->id)}}" method='POST'>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Post Title</label>
                <input type="Text" name="title" class="form-control @error('title') is-invalid @enderror" id="postTitle" aria-describedby="emailHelp"
                      value="{{old( 'title', $post->title)}}">
                @error('title')<p class="text-danger"> {{$errors->first('title')}} </p> @enderror
            </div>

            <div class="form-group">
                <label for="title">Post Text</label>
                <textarea name="text" class="form-control @error('text') is-invalid @enderror" id="postText">{{old( 'text', $post->text)}}
                </textarea>
                @error('text')<p class="text-danger"> {{$errors->first('text')}} </p> @enderror
            </div>

            <div class="form-group">
                <label for="title">Post Author</label>
                <input type="Text" name="author" class="form-control @error('author') is-invalid @enderror" id="postAuthor" aria-describedby="emailHelp"
                       placeholder="Enter Post Author" value="{{old( 'author', $post->author)}}">
                @error('author')<p class="text-danger"> {{$errors->first('author')}} </p> @enderror
            </div>

            <div style="display: flex; flex-direction: row; justify-content: space-between ">
                <button type="submit" class="btn  mb-2">Add Post</button>
                <button type="button" class="btn  mb-2">
                    <a href="/posts" style="color: black ">Back</a></button>
            </div>

        </form>
    </div>

    @endsection

