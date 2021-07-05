@extends('Layout.app')
@section('content')
<div style=" width: 90vw; margin:10px auto; color: white">

    <table class="table">
        <thead style="text-align: center; ">
        <tr>
            <th >ID</th>
            <th >Title</th>
            <th >Author</th>
            <th >Creat Date</th>
            <th >Edit</th>
            <th >Delete</th>
        </tr>
        </thead>
        @foreach($posts as $post )
            <tbody>

            <tr style="text-align: center; ">
                <td>
                    <a href="{{route('posts.show', $post->id)}}" style="color: white">
                        {{$post->id}}
                    </a></td>
                <td>
                    <a href="{{route('posts.show', $post->id)}}" style="color: white">
                    {{$post->title}}
                    </a></td>
                <td>{{$post->author}}</td>
                <td>{{$post->created_at}}</td>


                <td >
                    <a href="{{route('posts.edit', $post->id)}}">
                        <i class="fas fa-edit fa-1x" style="color: white"></i>
                    </a>
                </td>

                <td >
                    <form method="post" action="{{route('posts.destroy', $post-> id)}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color: transparent; color: white"
                                class="fas fa-trash-alt fa-1x"></button>
                    </form>
                </td>
            </tr>
            @endforeach()
            </tbody>

    </table>
    <div style = "display: flex; flex-direction: row; justify-content: center;">{{$posts->links()}}</div>


@endsection
