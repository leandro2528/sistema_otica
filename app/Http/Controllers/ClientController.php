<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create() {
        $clients = Client::all();
        return view('clients.create', compact('clients'));
    }

    public function store(Request $request) {
        $request->validate([
            'nome_completo'    => 'required|string|min:3|max:255',
            'cpf' => 'nullable|string|min:11|max:14',
            'telefone'         => 'required|string|min:10|max:20',
            'whatsapp'         => 'nullable|string|min:10|max:20',
            'data_nascimento'  => 'nullable|date',
            'observacoes'      => 'nullable|string|max:1000',
        ]);
        Client::create($request->all());
        return redirect()->route('clients.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function edit($id) {
       $client = Client::findOrFail($id);
       return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nome_completo'    => 'required|string|min:3|max:255',
            'cpf' => 'nullable|string|min:11|max:14',
            'telefone'         => 'required|string|min:10|max:20',
            'whatsapp'         => 'nullable|string|min:10|max:20',
            'data_nascimento'  => 'nullable|date',
            'observacoes'      => 'nullable|string|max:1000',
        ]);
        $data = [
            'nome_completo' => $request->nome_completo,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'whatsapp' => $request->whatsapp,
            'data_nascimento' => $request->data_nascimento,
            'observacoes' => $request->observacoes
        ];
        Client::findOrFail($id)->update($data);
        return redirect()->route('clients.index')->with('warning', 'Cliente atualizado com sucesso!');
    }

    public function destroy($id) {
        Client::findOrFail($id)->delete();
        return redirect()->route('clients.index')->with('danger', 'Cliente deletado com sucesso!');
    }
}
