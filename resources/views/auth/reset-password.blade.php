@extends('layouts.auth')
@section('body-class', 'register-page')

@section('content')
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <a href="../index2.html" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                    <h1 class="mb-0"><b>Admin</b>LTE</h1>
                </a>
            </div>
            <div class="card-body register-card-body">
                <p class="register-box-msg">Register a new membership</p>
                <form action="{{ route('password.update') }}" method="post">
                    @csrf
                    @method('POST')

                    <input type="hidden" name="token" value="{{ request()->token }}">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input readonly id="registerEmail" name="email" type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="You can use any email" value="{{ request()->email }}" />
                            <label for="registerEmail">Email</label>

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>

                    <div class="input-group mb-1">
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input id="registerPassword" name="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password" />
                                <label for="registerPassword">Password</label>

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating">
                                <input id="registerPassword" name="password_confirmation" type="password"
                                    class="form-control" placeholder="Password confirm" />
                                <label for="registerPassword">Repeat Password</label>
                            </div>
                            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Reset Password</button>
                        </div>

                </form>
            </div>
        </div>
    </div>
@endsection
