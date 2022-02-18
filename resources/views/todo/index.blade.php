@extends('layouts.default')
@section('content')
 <!-- Bootstrap Boilerplate... -->
 @section('content')
<div class="container">
    <div class="panel-body">
        <form action="{{route('tasks.store')}}" method="POST" class="form-horizontal">
            @csrf
 
            <!-- Task Name -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Задача</label>
 
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>
 
            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i>Добавить задачу
                    </button>
                </div>
            </div>
        </form>
    </div>
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Все задачи
            </div>
 
            <div class="panel-body">
                <table class="table table-striped task-table">
 
                    <!-- Table Headings -->
                    <thead>
                        <th>Задачи</th>
                        <th>&nbsp;</th>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                                <tr>
                                    <!-- Task Name -->
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>
                                
                                    <!-- Delete Button -->
                                    <td>
                                        <form action="{{ url('task/'.$task->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                
                                            <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
@stop
