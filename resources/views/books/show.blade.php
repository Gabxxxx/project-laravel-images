@extends('layouts.app')

@section('content')
    <div class="container">
        <img src="{{ asset('img/books/' . $book->image) }}" alt="{{ $book->title }}" class="img-thumbnail" style="max-width: 200px;">
        <h1>{{ $book->title }}</h1>
        <p><strong>Autor:</strong> {{ $book->author->name }}</p>
        <p><strong>Editora:</strong> {{ $book->publisher->name }}</p>
        <p><strong>Ano de Publicação:</strong> {{ $book->published_year }}</p>
        <p><strong>Categorias:</strong> 
            @foreach ($book->categories as $category)
                <span class="badge bg-secondary">{{ $category->name }}</span>
            @endforeach
        </p>
        <a href="{{ route('books.index') }}" class="btn btn-primary">Voltar à Lista</a>
        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este livro?')">Excluir</button>
        </form>
    </div>
@endsection
