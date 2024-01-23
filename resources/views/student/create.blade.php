@extends('layout.layout1')
@section('title', 'Page Title')
@section('content')

<div class="container">

    <h2>Create Naupang</h2>

    <form method="POST" action="/student">
        @csrf
        
        <label for="name">Name*:</label><br>
        <input type="text" id="name" name="name" required ><br>
        
        <label for="fathers_name">fathers_name:</label><br>
        <input type="text" id="fathers_name" name="fathers_name" ><br>
        
        <label for="mothers_name">mothers_name:</label><br>
        <input type="text" id="mothers_name" name="mothers_name" ><br>
    
        <label for="guardian">guardian:</label><br>
        <input type="text" id="guardian" name="guardian" ><br>
    
        <label for="dob">dob:</label><br>
        <input type="text" id="dob" name="dob" ><br>
    
        <label for="phone1">phone1:</label><br>
        <input type="text" id="phone1" name="phone1" ><br>
    
        <label for="phone2">phone2:</label><br>
        <input type="text" id="phone2" name="phone2" ><br>
    
        <label for="bial">bial:</label><br>
        <input type="text" id="bial" name="bial" ><br>
    
        <label for="section">section:</label><br>
        <input type="text" id="section" name="section" ><br>
        
        <label for="location">location:</label><br>
        <input type="text" id="location" name="location" ><br>

        <label for="photo">photo:</label><br>
        <input type="text" id="photo" name="photo"  ><br><br>
    
        <label for="user_id">Zirtirtu:</label><br>
        <select id="user_id" name="user_id">
            <option value="">Select an option</option>  
            <option disabled>Pre-Beginner</option>
            @foreach ($department['prebeginner'] as $user)
                <option value="free_sale_1">- Free Sale -</option>  
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
            
            <option disabled>Beginner</option>
            <option value="free_sale_2">- Free Sale -</option>  
            @foreach ($department['beginner'] as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
               
            <option disabled>Primary</option>
            <option value="free_sale_3">- Free Sale -</option>  
            @foreach ($department['primary'] as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
               
            <option disabled>Junior</option>
            <option value="free_sale_4">- Free Sale -</option>  
            @foreach ($department['junior'] as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
               
            <option disabled>Intermediate</option>
            <option value="free_sale_5">- Free Sale -</option>  
            @foreach ($department['intermediate'] as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
               
            <option disabled>Sacrament</option>
            <option value="free_sale_6">- Free Sale -</option>  
            @foreach ($department['sacrament'] as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach

            <option disabled>Senior</option>
            <option value="free_sale_7">- Free Sale -</option>  
            @foreach ($department['senior'] as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <input type="submit" value="Submit">
    </form>
</div>
@endsection
 