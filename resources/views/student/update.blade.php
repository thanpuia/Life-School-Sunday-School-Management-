@extends('layout.layout1')
@section('title', 'Page Title')
@section('content')

<div class="container">

    <h2>Update Naupang</h2>

   
    <form method="POST" action="{{ route('student.update', ['student' => $student->id]) }}">
        @csrf
        @method('PUT')
        
        <label for="name">Name*:</label><br>
        <input type="text" id="name" name="name" value="{{ $student->name }}" required><br>
        
        <label for="fathers_name">fathers_name:</label><br>
        <input type="text" id="fathers_name" name="fathers_name" value="{{ $student->fathers_name }}"  ><br>
        
        <label for="mothers_name">mothers_name:</label><br>
        <input type="text" id="mothers_name" name="mothers_name" value="{{ $student->mothers_name }}"  ><br>
    
        <label for="guardian">guardian:</label><br>
        <input type="text" id="guardian" name="guardian" value="{{ $student->guardian }}"  ><br>
    
        <label for="dob">dob:</label><br>
        <input type="text" id="dob" name="dob" value="{{ $student->dob }}"  ><br>
    
        <label for="phone1">phone1:</label><br>
        <input type="text" id="phone1" name="phone1" value="{{ $student->phone1 }}"  ><br>
    
        <label for="phone2">phone2:</label><br>
        <input type="text" id="phone2" name="phone2" value="{{ $student->phone2 }}"  ><br>
    
        <label for="bial">bial:</label><br>
        <input type="text" id="bial" name="bial" value="{{ $student->bial }}"  ><br>
    
        <label for="section">section:</label><br>
        <input type="text" id="section" name="section" value="{{ $student->section }}"  ><br>
        
        <label for="location">location:</label><br>
        <input type="text" id="location" name="location" value="{{ $student->location }}"  ><br>

        <label for="photo">photo:</label><br>
        <input type="text" id="photo" name="photo" value="{{ $student->photo }}"   ><br>
        
        <label for="user_id">user:</label><br>
        <select id="user_id" name="user_id">
            <option value="">Select an option</option> <!-- Blank/default option -->
            <option disabled>Beginner</option>
            <option value="free_sale_1">Beginner Free Sale</option>  
            @foreach ($beginner as $user)
                <option value="{{ $user->id }}" {{ $student->user_id === $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
           
            <option disabled>Primary</option>
            <option value="free_sale_2">Primary Free Sale</option>  
            @foreach ($primary as $user)
                <option value="{{ $user->id }}" {{ $student->user_id === $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>

        <br><br>
    
        <input type="submit" value="Update">
    </form>
</div>
@endsection
 