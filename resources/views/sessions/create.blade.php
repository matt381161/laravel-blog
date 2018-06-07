@extends('layout')
@section('content')
    <div class="col-md-8">
        <h1>Sign In</h1>

        <form method="POST" action="/login">
            {{csrf_field()}}

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
            </fb:login-button>
            <button class="btn-primary" onclick="logout();">Log out</button>

            <div id="status">
            </div>
            <div class="form-group">
               <button class="btn btn-primary" type="submit">Sigh In</button>
            </div>
            @include('layout.error')
        </form>
    </div>
    @include('layout.FBSDK')
@endsection