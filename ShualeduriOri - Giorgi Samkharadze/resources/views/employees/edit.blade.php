@extends('Layout.app')
@section('content')


<div>
    <form action="{{route('employees.update', $employee->id)}}" method='POST'>
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Employee name</label>
            <input type="Text" name="title" class="form-control" id="employeeTitle" aria-describedby="emailHelp"
                   value="{{old('name', $employee->name)}}" >

        </div>

        <div class="form-group">
            <label for="title">Employee surname</label>
            <input type="Text" name="text" class="form-control" id="postText" value="{{old('surname', $employee->surname)}}">
             </input>


        </div>

        <div class="form-group">
            <label for="title">Employee action</label>
            <input type="number" name="author" class="form-control" id="postAuthor" value="{{old('is_hired', $employee->is_hired)}}" required>

        </div>
        <button type="submit" class="btn btn-primary mb-2">Edit Employee Info</button>

    </form>
</div>
</body>
</html>

@endsection
