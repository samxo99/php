@extends('Layouts.app')
@section('content')
    <div>
        <table>
            <thead>
            <th>ID</th>
            <th>name</th>
            <th>surname</th>
            <th>IS_HIRED</th>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>


                    <td>{{$employee->name}}</td>

                    <td>{{$employee->surname}}</td>

                    <td>
                        <?php
                        if ($employee->is_hired == 1) {
                            echo "true";
                        } else {
                            echo "false";
                        }
                        ?>
                        <a href="{{route('employees.edit', $employee->id)}}">
                            <button style="border: 2px solid black;">დარედაქტირება</button>
                        </a>
                        <form action="{{route('employees.delete', $employee->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: 2px solid black;">წაშლა</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <div>{{$employees->links()}}
        </div>
    </div>
@endsection
