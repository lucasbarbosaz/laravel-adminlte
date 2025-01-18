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
                <form action="../index3.html" method="post">
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerFullName" type="text" class="form-control" placeholder="" />
                            <label for="registerFullName">Full Name</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-person"></span></div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerEmail" type="email" class="form-control" placeholder="" />
                            <label for="registerEmail">Email</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerPassword" type="password" class="form-control" placeholder="" />
                            <label for="registerPassword">Password</label>
                        </div>
                        <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                    </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>

                </form>
                <p class="mb-0 text-center">
                    <a href="login.html" class="link-primary text-center"> I already have a membership </a>
                </p>
            </div>
        </div>
    </div>
@endsection
