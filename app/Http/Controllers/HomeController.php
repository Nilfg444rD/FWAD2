<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // Метод для главной страницы
    public function index()
    {
        return view('home'); // Возвращаем представление для главной страницы
    }

    // Метод для страницы "О нас"
    public function about()
    {
        return view('about'); // Возвращаем представление для страницы "О нас"
    }
}
