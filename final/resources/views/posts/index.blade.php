@extends('Layout.app')
@section('content')

    <nav class=" navbar-expand-lg pad-20" >
        <div style = "display: flex; flex-direction: row; justify-content: center;">
            <ul class="navbar-nav " style="padding: 5px; ">
                <li >
                    <a href="/posts" class="nav-link" >
                        <i class="fas fa-home fa-2x" style="color: white"></i>
                    </a>
                </li>
                <li >
                    <a href="/posts/create" class="nav-link">
                        <i class="fas fa-plus fa-2x" style="color: white"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

<div style=" width: 90vw; margin:10px auto; color: white">

    <table class="table">
        <thead style="text-align: center; ">
        <tr>
            <th >საქონლის კოდი</th>
            <th >პროდუქტი</th>
            <th >სრული დასახელება</th>
            <th >ყიდვის თარიღი</th>
            <th >რედაქტირება</th>
            <th >ამოშლა</th>
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
