@extends('adminlte::master')

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Cijfers</title>
</head>

@section('body')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Cijfersite" src="...">
      </a>
    </div>
    <p class="navbar-text navbar-right">Signed in as PLACEHOLDER</p>
  </div>
</nav>

    <table class="display data-table">
        <thead>
            <tr>
                <th>Schoolvak</th>
                <th>Cijfers</th>
            </tr>
        </thead>
        <tbody>
        @foreach($grades as $grade)
        <tr>
        <td>{{ $grade->course }}</td>
        <td>{{ $grade->score }}</td>
        </tr>
        @endforeach   
        </tbody>
    </table>
        @section('adminlte_js')
            <script>
                $(document).ready(function () {
                    $('.data-table').dataTable();
                });
        </script>
            @yield('js')
        @stop
@stop 


</html>