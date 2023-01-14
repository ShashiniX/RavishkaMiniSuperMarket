@extends('transport.layout')
@section('content')
<html>
    <head>
        <title>Search Results</title>
    </head>
    <body>
<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h3>Sample vehicle Details</h3>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Vehicle Type</th>
                <th>Vehicle Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->vehicle_type}}</td>
                <td>{{$user->vehicle_num}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</body>
</table>
@stop
