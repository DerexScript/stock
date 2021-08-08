@extends('templates.base')

@section('title', $title)

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <form class="row g-3" action="{{route('auth.store')}}" method="POST">
                    <a class="d-flex justify-content-center" href="">
                        <img class="mb-4" src="{{asset('assets/img/brand/bootstrap-logo.svg')}}" alt="" width="72"
                             height="57">
                    </a>
                    <h1 class="h3 mb-3 fw-normal d-flex justify-content-center">Registrar</h1>

                    <div class="col-md-6">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
                        <div id="nameHelp" class="form-text text-warning">@if($errors->has('name')) {{$errors->first('name')}} @endif</div>
                    </div>

                    <div class="col-md-6">
                        <label for="surname" class="form-label">Sobrenome</label>
                        <input type="text" name="surname" class="form-control" id="surname" aria-describedby="surnameHelp">
                        <div id="surnameHelp" class="form-text text-warning">@if($errors->has('surname')) {{$errors->first('surname')}} @endif</div>
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text text-warning">@if($errors->has('email')) {{$errors->first('email')}} @endif</div>
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Username</label>
                        <input type="text" name="username" maxlength="15" class="form-control" id="username" aria-describedby="usernameHelp">
                        <div id="usernameHelp" class="form-text text-warning">@if($errors->has('username')) {{$errors->first('username')}} @endif</div>
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" aria-describedby="passwordHelp">
                        <div id="passwordHelp" class="form-text text-warning">@if($errors->has('password')) {{$errors->first('password')}} @endif</div>
                    </div>

                    <div class="col-md-6">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" aria-describedby="confirmPasswordHelp">
                        <div id="confirmPasswordHelp" class="form-text text-warning">@if($errors->has('confirmPassword')) {{$errors->first('confirmPassword')}} @endif</div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="terms" id="terms">
                            <label class="form-check-label" for="terms">
                                Aceito com os <a href="#">termos</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-outline-success w-100">Cadastrar</button>
                    </div>
                    @CSRF
                </form>
            </div>
        </div>
    </div>

@endsection