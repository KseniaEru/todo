@extends('layouts.default')
@section('content')
<div class="container">
    <form action="{{route('register.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Your name</label>
            <input type="text" class="form-control" id="name" name="name"  value="{{ old('name') }}">
        </div>
        <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
@stop
