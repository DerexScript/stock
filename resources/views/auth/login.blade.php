@extends('templates.base')

@section('title', $title)

@section('content')
    <main class="mt-5" style="background-color: #ccc;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <form class="needs-validation" novalidate action="{{ route('auth.verifyLogin') }}" method="POST">
                        <a class="d-flex justify-content-center" href="">
                            <img class="mb-4" src="{{ asset('assets/img/brand/estoque.png') }}" alt="" width="72"
                                 height="57">
                        </a>
                        @if ($errors->has('loginFailed'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('loginFailed') }}
                            </div>
                        @endif
                        @if (Session::has('status'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('status') }}
                            </div>
                        @endif
                        <h1 class="h3 mb-3 fw-normal d-flex justify-content-center">Entrar</h1>
                        <div class="form-floating mt-1">
                            <input type="text" name="credential"
                                   class="form-control {{-- $errors->has('credential') ? 'is-invalid' : '' --}}"
                                   id="credential"
                                   placeholder=""
                                   value="{{ !empty(old('credential')) ? old('credential') : 'derex@outlook.com.br' }}"
                                   aria-describedby="credentialHelp" required>
                            <label for="credential" class="form-label">Email or User</label>
                            <div id="credentialHelp" class="form-text text-white bg-warning border border-1 rounded-2">
                                @if ($errors->has('credential'))
                                    {{ $errors->first('credential') }} @endif
                            </div>
                            <div class="valid-feedback">
                                Parece bom!
                            </div>
                            <div class="invalid-feedback">
                                Por favor, preencha com um e-mail valido.
                            </div>
                        </div>
                        <div class="form-floating mt-1">
                            <input type="password" class="form-control" name="password" id="password"
                                   value="{{ !empty(old('password')) ? old('password') : 'password' }}" minlength="8"
                                   aria-describedby="pwHelp" placeholder="*******" required>
                            <label for="password">Password</label>
                            <div id="pwHelp" class="form-text text-white bg-warning border border-1 rounded-2">
                                @if ($errors->has('password'))
                                    {{ $errors->first('password') }} @endif
                            </div>
                            <div class="valid-feedback">
                                Parece bom!
                            </div>
                            <div class="invalid-feedback">
                                Por favor, preencha com uma senha valida.
                            </div>
                        </div>

                        <div class="checkbox mb-3 mt-1">
                            <label>
                                <input type="checkbox" name="remember"> Lembrar-me
                            </label>
                        </div>
                        <button class="w-100 btn btn-primary" type="submit">Entrar</button>
                        <div class="d-flex justify-content-between">
                            <p class="text-info me-2">Não tem uma conta?
                                <a href="{{ route('auth.create') }}"
                                   class="text-decoration-none link-primary">Registre-se</a>
                            </p>
                            <p class="ms-2">
                                <a href="{{ route('password.request') }}"
                                   class="text-decoration-none link-primary">Redefinir
                                    Senha</a>
                            </p>
                        </div>
                        <p class="mt-5 mb-3 text-muted">&copy; 2021–{{ date('Y') }}</p>
                        @CSRF
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
    {{-- <script> --}}
    {{--  --}}
    {{-- (function () { --}}
    {{-- 'use strict' --}}
    {{-- var forms = document.querySelectorAll('.needs-validation') --}}
    {{-- Array.prototype.slice.call(forms).forEach(function (form) { --}}
    {{-- form.addEventListener('submit', function (event) { --}}
    {{-- if (!form.checkValidity()) { --}}
    {{-- event.preventDefault() --}}
    {{-- event.stopPropagation() --}}
    {{-- } --}}
    {{-- form.classList.add('was-validated') --}}
    {{-- }, false); --}}
    {{-- }); --}}
    {{-- })(); --}}
    {{-- </script> --}}
@endsection
