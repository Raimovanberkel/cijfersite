@extends('adminlte::page')



@section('title', 'Docentenportaal')

@section('content_header')
    <h1>Dashboard</h1>
    
@stop

@section('content')
   <h1>Welkom</h1><p>	{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</p>
@stop