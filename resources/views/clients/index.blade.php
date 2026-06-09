<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row my-4">
            <div class="col-10">
                <h3 class="fs-3">Clientes</h3>
                <p>Gerencie sua base de clientes e veja o histórico completo.</p>
            </div>
            <div class="col-2">
                <a href="{{ route('clients.create') }}" class="btn btn-primary d-flex align-items-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                        </svg>
                    </span>
                    <span class="ms-3 fw-bold">Novo Cliente</span>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">

                    @if(session('success'))
                        <div class="alert alert-success" id="alert_success">
                            {{ session('success') }}
                        </div>
                        <script>
                            setTimeout(() => {
                                document.getElementById('alert_success').remove();
                            }, 2000);
                        </script>
                    @endif

                    @if(session('warning'))
                        <div class="alert alert-warning" id="alert_warning">
                            {{ session('warning') }}
                        </div>
                        <script>
                            setTimeout(() => {
                                document.getElementById('alert_warning').remove();
                            }, 2000);
                        </script>
                    @endif

                     @if(session('danger'))
                        <div class="alert alert-danger" id="alert_danger">
                            {{ session('danger') }}
                        </div>
                        <script>
                            setTimeout(() => {
                                document.getElementById('alert_danger').remove();
                            }, 2000);
                        </script>
                    @endif

                    @if($clients->count() > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Cliente</th>
                                    <th>Telefone</th>
                                    <th>WhatsApp</th>
                                    <th>Data do Nascimento</th>
                                    <td>Ações</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clients as $client)
                                    <tr>
                                        <td>{{ $client->nome_completo}}</td>
                                        <td>{{ $client->telefone }}</td>
                                        <td>{{ $client->whatsapp }}</td>
                                        <td>{{ date('d/m/Y', strtotime($client->data_nascimento)) }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('clients.edit', ['id'=>$client->id]) }}" title="Editar Cliente" class="me-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                </svg>
                                            </a>
                                            <form action="{{ route('clients.destroy', ['id'=>$client->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Deseja realmente excluir?');">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>    
                        </table>
                        @else
                            <div class="alert alert-info">
                                <p>
                                    Não existe cliente cadastrado. <a href="">Cadastrar cliente</a>
                                </p>
                            </div>
                    @endif
                </div>
            </div>
        </div>

    </div>

</x-app-layout>