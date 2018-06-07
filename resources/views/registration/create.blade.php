@extends('layout')
@section('content')
    <div class="col-sm-8">
        <h1>Register</h1>

        <form method="POST" action="/register">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="emali">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="password_confirmation">Password Confirmation:</label>
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            @include('layout.error')
        </form>
    </div>
@endsection