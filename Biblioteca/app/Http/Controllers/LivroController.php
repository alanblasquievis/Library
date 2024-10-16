<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::paginate(10); // Paginando a lista de livros
        return view('livros.index', compact('livros')); // Retornando a view com os livros
    }

    public function create()
    {
        return view('livros.create'); // Retornando a view para criar um novo livro
    }

    public function store(Request $request) // Método para salvar o livro
    {
        Livro::create($request->all()); // Criando o livro com base nos dados do request
        return redirect()->route('livros.index'); // Redirecionando após salvar
    }

    public function edit(Livro $livro) // Método para editar um livro existente
    {
        return view('livros.edit', compact('livro')); // Retornando a view de edição com o livro
    }

    public function update(Request $request, Livro $livro) // Método para atualizar os dados do livro
    {
        $livro->update($request->all()); // Atualizando o livro com os dados do request
        return redirect()->route('livros.index'); // Redirecionando após atualizar
    }

    public function destroy(Livro $livro) // Método para excluir o livro
    {
        $livro->delete(); // Excluindo o livro
        return redirect()->route('livros.index'); // Redirecionando após excluir
    }
}

