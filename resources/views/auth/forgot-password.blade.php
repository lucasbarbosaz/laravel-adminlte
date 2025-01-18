@extends('layouts.auth')

@section('body-class', 'login-page')

@section('content')
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <a href="../index2.html" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                    <h1 class="mb-0"><b>Admin</b>LTE</h1>
                </a>
            </div>
            <div class="card-body login-card-body">
                <p class="login-box-msg">Recover your password</p>

                @session('status')
                    <div class="alert alert-success" role="alert">
                        {{ $value }}
                    </div>
                @endsession
                <form action=" {{ route('password.email') }} " method="post">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="loginEmail" type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                placeholder="" />
                            <label for="loginEmail">Email</label>

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Send-me link</button>
                    </div>
                </form>
                <p class="mb-1 text-center"><a href=" {{ route('login') }} ">Back to login</a></p>
            </div>
        </div>
    </div>
@endsection
