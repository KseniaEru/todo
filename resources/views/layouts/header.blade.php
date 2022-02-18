<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header>
    @section('header')
    <div class="navbar navbar-light bg-light shadow-sm">
        <div class="container d-flex justify-content-between">
            <!-- <a href="{{ route('register.create') }}">Регистрация</a>
            <a href="{{ route('login.create') }}">Вход</a>
             -->
             <a href="{{ route('home') }}">Главная</a>
<!-- 
            @php
            dump(auth()->check())
            @endphp -->
            @if(auth()->check())
            <a href="{{ route('tasks.create') }}">ToDo List</a>
            <a href="{{ route('logout') }}">Выход</a>
            @else
            <a href="{{ route('register.create') }}">Регистрация</a>
            <a href="{{ route('login.create') }}">Вход</a>
            <a href="{{ route('tasks.create') }}">ToDo List</a>
            @endif
        </div>
    </div>
    @show
</header>

