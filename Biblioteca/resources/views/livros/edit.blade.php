<!-- resources/views/alunos/edit.blade.php -->

@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Editar Aluno</h1>

                    <form action="{{ route('livros.update', $livro->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="nome" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome:</label>
                            <input type="text" name="nome" id="nome" class="form-input mt-1 block w-full" value="{{ $livro->nome }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="autor" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Autor:</label>
                            <input type="text" name="autor" id="autor" class="form-input mt-1 block w-full" value="{{ $livro->autor }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="ano" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Ano:</label>
                            <input type="text" name="ano" id="ano" class="form-input mt-1 block w-full" value="{{ $livro->ano }}" required>
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
