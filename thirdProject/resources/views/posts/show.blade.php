@extends('Layout.app')
@section('content')
    <style>
        p {
            color: white;
            font-size: larger
        }
    </style>

<div style=" display: flex; justify-content: center; align-items: center; margin-bottom:10vh; margin-top: 10vh">

        <div style=" padding: 15px">
            <div class="flex items-center">
                <div>
                    <p>{{$post->id}}.</p>
                </div>
                <div class="ml-4">
                    <p>{{$post->title}}</p>
                </div>
            </div>

            <div class="flex items-center">
                <div style="font-size: large">
                    <p> {{$post->text}}</p>
                </div>
            </div>

                <button type="button" class="btn  mb-2">
                    <a href="/" style="color: black ">Back</a></button>

        </div>


</div>
@endsection
