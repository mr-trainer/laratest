@extends('layouts.app')
@section('content')
@if(count($reports)>0)
<table class="table table-striped">
    <thead>
        <th>Report Title</th>
        <th>Report Description</th>
        <th>Report Priority</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{$report->title}}</td>
            <td>{{$report->description}}</td>
            <td>{{$report->priority}}</td>
            <td><a href="/reports/{{$report->id}}" class="btn btn-secondary">Details</a></td>
            <td><a href="/reports/{{$report->id}}/edit" class="btn btn-warning">Edit</a></td>
            <td><form action="/reports/{{$report->id}}" method="POST">
                @csrf
                @method('DELETE')<input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')"></form></td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
No Data
@endif
@endsection