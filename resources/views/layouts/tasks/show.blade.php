@extends('layouts.app')

@section('title', 'Задача {{ $task["id"] }}')

@section('content')
    <h1>{{ $task['title'] }}</h1>
    <p>{{ $task['description'] }}</p>
@endsection
