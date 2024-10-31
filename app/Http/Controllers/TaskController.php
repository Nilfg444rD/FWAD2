<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Метод для отображения списка задач
    public function index()
    {
        $tasks = [
            ['id' => 1, 'title' => 'Первая задача'],
            ['id' => 2, 'title' => 'Вторая задача'],
            ['id' => 3, 'title' => 'Третья задача']
        ];

        return view('tasks.index', ['tasks' => $tasks]);
    }

    // Метод для отображения формы создания задачи
    public function create()
    {
        // Здесь позже будет код для отображения формы создания задачи
        return 'This is the form to create a task';
    }

    // Метод для сохранения новой задачи
    public function store(Request $request)
    {
        // Здесь позже будет код для сохранения новой задачи
        return 'Task has been saved';
    }

    // Метод для отображения задачи по ID
    public function show($id)
    {
        $task = [
            'id' => $id,
            'title' => 'Задача ' . $id,
            'description' => 'Описание задачи с ID ' . $id,
            'created_at' => now()->subDays(2)->format('Y-m-d'),
            'updated_at' => now()->format('Y-m-d'),
            'status' => false, // Например, задача не выполнена
            'priority' => 'средний', // Например, средний приоритет
            'assigned_to' => 'Галущенко Николай' // Например, назначенный пользователь
        ];

        return view('tasks.show', ['task' => $task]);
    }

    // Метод для отображения формы редактирования задачи
    public function edit($id)
    {
        return "This is the form to edit task with ID: $id";
    }

    // Метод для обновления задачи
    public function update(Request $request, $id)
    {
        return "Task with ID: $id has been updated";
    }

    // Метод для удаления задачи
    public function destroy($id)
    {
        return "Task with ID: $id has been deleted";
    }
}
