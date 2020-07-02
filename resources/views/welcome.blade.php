@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">To Do App</h1>
        <a style="margin: 19px; font-size: 2em" href="{{ route('tasks.index')}}">Tasks</a>
        <a style="margin: 19px; font-size: 2em" href="{{ route('categories.index')}}">Categories</a>
    </div>
</div>
@endsection 
