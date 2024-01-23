@extends('layout.layout1')
@section('title', 'Page Title')
@section('content')

 
<div class="container">
    <nav>
        <ul>
            <li><a href="{{ route('filter.department', ['department_id' => 1]) }}">Pre-Beginner</a></li>
            <li><a href="{{ route('filter.department', ['department_id' => 2]) }}">Beginner</a></li>
            <li><a href="{{ route('filter.department', ['department_id' => 3]) }}">Primary</a></li>
            <li><a href="{{ route('filter.department', ['department_id' => 4]) }}">Junior</a></li>
            <li><a href="{{ route('filter.department', ['department_id' => 5]) }}">Intermediate</a></li>
            <li><a href="{{ route('filter.department', ['department_id' => 6]) }}">Sacrament</a></li>
            <li><a href="{{ route('filter.department', ['department_id' => 7]) }}">Senior</a></li>

          </ul>
    </nav>
     
</div>
 
@endsection