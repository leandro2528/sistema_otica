<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row my-4">
            <div class="col">
                <div class="cards-box d-flex justify-content-between">

                    <div class="card px-5 w-100">
        
                        <div class="card-body d-flex justify-content-between">
                            <div class="cards-info">
                                <p>Clientes</p>
                                <span>0{{ $totalClient }}</span>
                            </div>
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="card mx-2 w-100">
                        <div class="card-body">
                            <div class="card-body d-flex justify-content-between">
                            <div class="cards-info">
                                <p>Pedidos</p>
                                <span>0{{ $totalClient }}</span>
                            </div>
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                </svg>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="card w-100">
                        <div class="card-body">
                            <div class="card-body d-flex justify-content-between">
                            <div class="cards-info">
                                <p>Em Andamento</p>
                                <span>0{{ $totalClient }}</span>
                            </div>
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                </svg>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="card mx-2 w-100">
                        <div class="card-body">
                            <div class="card-body d-flex justify-content-between">
                            <div class="cards-info">
                                <p>Entregues</p>
                                <span>0{{ $totalClient }}</span>
                            </div>
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                </svg>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="card w-100">
                        <div class="card-body">
                            <div class="card-body d-flex justify-content-between">
                            <div class="cards-info">
                                <p>Em Inativos</p>
                                <span>0{{ $totalClient }}</span>
                            </div>
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                </svg>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="card ms-2 w-100">
                        <div class="card-body">
                            <div class="card-body d-flex justify-content-between">
                            <div class="cards-info">
                                <p>Aniversariantes</p>
                                <span>0{{ $totalClient }}</span>
                            </div>
                            <div class="card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                </svg>
                            </div>
                        </div>
                        </div>
                    </div>

                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
