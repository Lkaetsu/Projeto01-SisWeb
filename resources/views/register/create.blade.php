@extends('components.layout')

@section('content')
    <br>
    <main class="max-w-lg mx-auto">
        <h1 class="text-center">Registre-se</h1>
        <br>
        <div class="inner">
            <form method="POST" action="/register">
                @csrf
                <div class="mb-6">
                    <label for="name">Nome Completo</label>
                    <input type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="name" 
                        id="name"
                        value="{{ old('name') }}"
                        required>
                        <small id="name" class="form-text text-muted">
                            @error('name')
                                <p class="error">**{{ $message }}**</p>
                            @enderror
                        </small>
                </div>
                <br>
                <div class="mb-6">
                    <label for="username">Nome de Usuario</label>
                    <input type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="username" 
                        id="username"
                        value="{{ old('username') }}"
                        required>
                        <small id="username" class="form-text text-muted">
                        @error('username')
                            <p class="error">**{{ $message }}**</p>
                        @enderror
                        </small>
                </div>
                <br>
                <div class="mb-6">
                    <label for="cpf">CPF</label>
                    <input type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="cpf" 
                        id="cpf"
                        value="{{ old('cpf') }}"
                        required>
                    <small id="cpf" class="form-text text-muted">
                    @error('cpf')
                        <p class="error">**{{ $message }}**</p>
                    @enderror
                    </small>
                </div>
                <br>
                <div class="mb-6">
                    <label for="endere??o">Endere??o de Moradia</label>
                    <input type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="endere??o" 
                        id="endere??o"
                        value="{{ old('endere??o') }}"
                        required>
                    <small id="endere??o" class="form-text text-muted">
                    @error('endere??o')
                        <p class="error">**{{ $message }}**</p>
                    @enderror
                    </small>
                </div>
                <br>
                <div class="mb-6">
                    <label for="filme">Filme de Prefer??ncia</label>
                    <input type="text"
                        class="border border-gray-400 p-2 w-full"
                        name="filme" 
                        id="filme"
                        value="{{ old('filme') }}"
                        required>
                    <small id="filme" class="form-text text-muted">
                    @error('filme')
                        <p class="error">**{{ $message }}**</p>
                    @enderror
                    </small>
                </div>
                <br>
                <div class="mb-6">
                    <label for="password">Senha</label>
                    <input type="password"
                        class="border border-gray-400 p-2 w-full"
                        name="password" 
                        id="password" 
                        required>
                    <small id="password" class="form-text text-muted">
                    @error('password')
                        <p class="error">**{{ $message }}**</p>
                    @enderror
                    </small>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection