@extends('layouts.app')
<style>
    html,
    body {
        height: 100%;
        text-align:center !important;
    }
    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }
</style>
@section('content')

<form method="POST" action="{{ route('login') }}" class="form-signin">
    <h1 class="h3 mb-3 font-weight-normal">Вход</h1>
    @csrf

    <label for="email" class="sr-only">Email</label>

    <input id="email" type="text" class="form-control @if ($errors->has('email')) is-invalid @endif" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
    

    <label for="password" class="sr-only">Парола</label>

    <input id="password" type="password" class="form-control @if ($errors->has('password')) is-invalid @endif" name="password" required autocomplete="current-password" placeholder="Парола">

    <button type="submit" class="btn btn-lg btn-primary btn-block">
        Вход
    </button>
</form>
@endsection
