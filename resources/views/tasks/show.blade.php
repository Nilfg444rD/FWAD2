@extends('layouts.app')

@section('title', 'Задача ' . $task['id'])

@section('content')
    <x-task 
        :id="$task['id']"
        :title="$task['title']"
        :description="$task['description']"
        :created_at="$task['created_at']"
        :updated_at="$task['updated_at']"
        :status="$task['status']"
        :priority="$task['priority']"
        :assigned_to="$task['assigned_to']"
    />
@endsection
