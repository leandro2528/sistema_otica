<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row my-4">
            <div class="col-10">
                <h3 class="fs-3">Novo Clientes</h3>
            </div>
            <div class="col-2">
                <a href="{{ route('clients.index') }}" class="btn btn-success d-flex align-items-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                        </svg>
                    </span>
                    <span class="ms-3 fw-bold">Lista de Cliente</span>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
    <div class="card-body">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form action="{{ route('clients.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nome Completo</label>
                    <input type="text" name="nome_completo" class="form-control">
                </div>

                <div class="row my-3">

                    <div class="col-md-6">
                        <label class="form-label">CPF</label>
                        <input type="text" name="cpf" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Data de Nascimento</label>
                        <input type="date" name="data_nascimento" class="form-control">
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">
                        <label class="form-label">Telefone</label>
                        <input type="text" name="telefone" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">WhatsApp</label>
                        <input type="text" name="whatsapp" class="form-control">
                    </div>

                </div>

                <div class="row my-3">

                    <div class="col">
                        <label class="form-label">Observações</label>
                        <input type="text" name="observacoes" class="form-control">
                    </div>

                </div>

                <div class="ro">
                    <div class="col">
                        <div class="col">
                        <input type="submit" value="Cadastrar" class="btn btn-primary">
                        </div>
                    </div>
                </div>

            </form>

        </div>

    </div>
            </div>
        </div>

    </div>

</x-app-layout>