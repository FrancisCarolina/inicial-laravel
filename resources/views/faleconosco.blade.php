<!-- resources/views/form.blade.php -->
@extends('layout.app')

@section('title', 'Fale conosco')

@section('content')
<h2>Formulário de Exemplo</h2>
<form method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="message">Mensagem</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
