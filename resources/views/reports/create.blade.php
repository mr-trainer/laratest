@extends('layouts.app')
@section('content')
<h3>New Report Form</h3>
<form action="/reports" method="POST" class="form-group">
    @csrf
    Title : <input type="text" placeholder="please insert report title" name="title" class="form-control">
    @if($errors->has('title'))<span>{{$errors->first('title')}}</span>
    @endif<br>
    Description : <textarea name="description" class="form-control"></textarea>@if($errors->has('description'))<span>{{$errors->first('description')}}</span>
    @endif<br>
    Priority: <select name="priority" class="form-control">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        </select><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Cancel"><br>
</form>
@endsection