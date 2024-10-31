@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">To-Do App для команд</h1>
        <p class="lead">Управляйте своими задачами, отслеживайте прогресс и улучшайте командную работу с помощью нашего приложения.</p>
    </div>

    <h2>Навигация</h2>
    <ul>
        <li><a href="{{ route('tasks.index') }}">Список задач</a></li>
        <li><a href="{{ route('tasks.create') }}">Создать задачу</a></li>
    </ul>

    <h2>Информация о приложении</h2>
    <p>Наше приложение помогает командам организовать задачи, отслеживать их выполнение и управлять приоритетами.</p>
@endsection
