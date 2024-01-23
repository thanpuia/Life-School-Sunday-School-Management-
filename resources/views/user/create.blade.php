@extends('layout.layout1')
@section('title', 'Page Title')
@section('content')
    
<div class="container">

    <h2>Create Zirtirtu</h2>

    <form method="POST" action="/user">
        @csrf
        
        <label for="name">Name*:</label><br>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">email:</label><br>
        <input type="text" id="email" name="email" ><br>
        
        <label for="password">password:</label><br>
        <input type="text" id="password" name="password" ><br>
    
        <label for="parent">parent:</label><br>
        <input type="text" id="parent" name="parent" ><br>
    
        <label for="dob">dob:</label><br>
        <input type="text" id="dob" name="dob" ><br>
    
        <label for="phone">phone:</label><br>
        <input type="text" id="phone" name="phone" ><br>
    
        <label for="bial">bial:</label><br>
        <input type="text" id="bial" name="bial" ><br>
    
        <label for="section">section:</label><br>
        <input type="text" id="section" name="section" ><br>
        
        <label for="location">location:</label><br>
        <input type="text" id="location" name="location" ><br>

        <label for="photo">photo:</label><br>
        <input type="text" id="photo" name="photo"  ><br><br>
            
        <label for="department_id">department*:</label><br>
        <select id="department_id" name="department_id" required>
            <option value="">Select an option</option> <!-- Blank/default option -->
            @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>

        <input type="submit" value="Submit">
    </form>
</div>

@endsection