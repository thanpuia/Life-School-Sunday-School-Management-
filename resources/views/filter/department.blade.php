@extends('layout.layout1')
@section('title', 'Page Title')
@section('content')

 
<div class="container">
    <nav>
        <ul>
            <li><a href="{{ route('student.create') }}">New Naupang</a></li>
             <!-- Add more menu items as needed -->
        </ul>
    </nav>
    <h2>{{ $department->name }}</h2>

    <table id="datatable" class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Hotu</th>
                <th>Action</th>


                <!-- Add more table headings if needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->fathers_name }}</td>
                <td>{{ $student->mothers_name }}</td>
                <td>{{ $student->user->name??'Free Sale' }}</td>

                <td>

                    <a href="{{ route('student.edit', ['student' => $student->id]) }}" class="btn btn-primary">Edit</a>
                </td>

                <!-- Display more user data in additional columns -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
 
@endsection