
@extends('layout.layout1')
@section('title', 'All Hotu')
@section('content')
<div class="container">
    <nav>
        <ul>
            <li><a href="{{ route('user.create') }}">New Zirtirtu</a></li>
             <!-- Add more menu items as needed -->
        </ul>
    </nav>
    <h2>Sunday School Zirtirtu Zawng Zawng</h2>

    <table id="datatable"  class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Department</th>
                <th>Action</th>

                <!-- Add more table headings if needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->department->name??"Free" }}</td>

                <td>
                    <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-primary">Edit</a>
                </td>            </tr>
            @endforeach
        </tbody>
    </table>
</div>
 
@endsection