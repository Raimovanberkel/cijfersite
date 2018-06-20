@extends('adminlte::master')


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
    
    <title>Cijfers</title>
</head>


@section('body')
   
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
        <td>{{$grade->score}}</td>
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