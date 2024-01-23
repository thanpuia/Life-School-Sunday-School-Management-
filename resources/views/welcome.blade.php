@extends('layout.layout1')
@section('title', 'Dashboard')
@section('content')

<h1>Welcome</h1>

Naupang Department Statistics

<ol>
    <ol>
        <h4>Beginner</h4>
        <li>Zirtirtu: {{ $zirtirtu['beginner'] }}</li>
        <li>Zirlai:  {{ $zirlai['beginner'] }}</li>
    </ol>
    <ol>
        <h4>Primary</h4>
        <li>Zirtirtu:{{ $zirtirtu['primary'] }} </li>
        <li>Zirlai: {{ $zirlai['primary'] }}</li>
    </ol>
    <ol>
        <h4>Junior</h4>
        <li>Zirtirtu: {{ $zirtirtu['junior'] }}</li>
        <li>Zirlai: {{ $zirlai['junior'] }}</li>
    </ol>
    <ol>
        <h4>Intermediate</h4>
        <li>Zirtirtu:{{ $zirtirtu['intermediate'] }} </li>
        <li>Zirlai: {{ $zirlai['intermediate'] }}</li>
    </ol>
    <ol>
        <h4>Sacrament</h4>
        <li>Zirtirtu: {{ $zirtirtu['sacrament'] }}</li>
        <li>Zirlai: {{ $zirlai['sacrament'] }}</li>
    </ol>
    <ol>
        <h4>Senior</h4>
        <li>Zirtirtu: {{ $zirtirtu['senior'] }}</li>
        <li>Zirlai: {{ $zirlai['senior'] }}</li>
    </ol>
 
    <ol>
        <h4>TOTAL</h4>
        <li>Zirtirtu: {{ $zirtirtu['all'] }}</li>
        <li>Zirlai: {{ $zirlai['all'] }}</li>
    </ol>
</ol>


 
@endsection