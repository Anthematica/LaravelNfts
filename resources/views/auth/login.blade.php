@extends('layouts.main')

@section('main')
    <main class="main_two_login">
        <div class="sign_form ">
            <h2>Login</h2>
            <form class="register-form" method="POST" action="{{ route('login') }}">
                @csrf 
                <input class="input" name="email" type="email" placeholder="email">
                
                <input class="input" name="password" required type="password" placeholder="password">
                
                <button class="primary_button" type="submit">Log in</button>
            </form>
        </div>
       
    </main>
@endsection
