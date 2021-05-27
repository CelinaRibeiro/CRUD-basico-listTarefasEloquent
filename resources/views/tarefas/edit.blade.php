@extends('layouts.admin')

@section('title', 'Edição de Tarefas')

@section('content')
    <h1>Edição</h1>

    @if($errors->any())
    @foreach($errors->all() as $error)
        {{ $error }} <br/>
    @endforeach
    @endif

    <form method="POST">
        @csrf
        <label>
            Título: 
            <input type="text" name="titulo" value="{{ $data->titulo }}"/>
        </label>
        <br/> <br/>
        <input type="submit" value="Salvar" />
        <br/> <br/>
    </form>
@endsection