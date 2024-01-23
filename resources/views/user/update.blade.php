@extends('layout.layout1')
@section('title', 'Page Title')
@section('content')
    
<div class="container">

    <h2>Update Zirtirtu</h2>

    <form method="POST" action="{{ route('user.update', ['user' => $user->id]) }}">
        @csrf
        @method('PUT')
        
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="{{ $user->name }}" ><br>
        
        <label for="email">email:</label><br>
        <input type="text" id="email" name="email" value="{{ $user->email }}" ><br>
        
        <label for="password">password:</label><br>
        <input type="text" id="password" name="password" value="{{ $user->password }}" ><br>
    
        <label for="parent">parent:</label><br>
        <input type="text" id="parent" name="parent" value="{{ $user->parent }}" ><br>
    
        <label for="dob">dob:</label><br>
        <input type="text" id="dob" name="dob" value="{{ $user->dob }}" ><br>
    
        <label for="phone">phone:</label><br>
        <input type="text" id="phone" name="phone" value="{{ $user->phone }}" ><br>
    
        <label for="bial">bial:</label><br>
        <input type="text" id="bial" name="bial" value="{{ $user->bial }}" ><br>
    
        <label for="section">section:</label><br>
        <input type="text" id="section" name="section" value="{{ $user->section }}" ><br>
        
        <label for="location">location:</label><br>
        <input type="text" id="location" name="location" value="{{ $user->location }}" ><br>

        <label for="photo">photo:</label><br>
        <input type="text" id="photo" name="photo" value="{{ $user->photo }}"  ><br><br>
    
        <label for="department_id">department:</label><br>
        <select id="department_id" name="department_id">
            <option value="">Select an option</option> <!-- Blank/default option -->
            @foreach ($departments as $department)
                 <option value="{{ $department->id }}" {{ $user->department_id === $department->id ? 'selected' : '' }}>
                    
                    {{ $department->name }}
                </option>
            @endforeach
        </select>

        <input type="submit" value="Update">
    </form>
</div>

@endsection