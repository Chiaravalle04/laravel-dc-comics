@extends('layouts.admin')

@section('content-admin')

<div class="container d-flex ai-center jc-center">

    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="">
    
    <div class="container-login">
    
        <label for="username">Username</label>
    
        <input type="text" name="" id="username" placeholder="Username" value="root">
    
        <label for="username">Password</label>
    
        <input type="password" name="" id="" placeholder="Password" value="root">
    
        <a href="{{ route('admin_home') }}">Accedi</a>
    
    </div>

</div>

@endsection
