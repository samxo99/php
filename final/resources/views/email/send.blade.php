
@extends('Layout.app')
@section('content')

<form method="post" action="{{route('send')}}" >
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" style="color: white">გთხოვთ მიუთითოთ Gmail-ი</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text" style="color: white">შეტყობინება გამოგეგზავნებათ მითითებულ Gmail-ზე</div>
    </div>
    <button type="submit" class="btn btn-primary">დადასტურება</button>
</form>

@endsection
