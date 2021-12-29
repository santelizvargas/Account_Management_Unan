@extends('layouts.app', ['title' => 'Panel de administración'])

@section('content')
    <div class="row mb-4">
        <div class="col-md-4">
            <x-card title='Definir Conceptos'>
                <div class="d-flex justify-content-between">
                    <div class="text-blue">
                        <h1>2734</h1>
                        <p>Conceptos</p>
                    </div>
                    <div class="d-flex flex-column align-items-end">
                        <i class="bi bi-clipboard-check fs-1"></i>
                        <span>Conceptos</span>
                    </div>
                </div>
                <x-slot name="footer">
                    Ver detalles <i class="bi bi-arrow-right-circle"></i>
                </x-slot>
            </x-card>
        </div>

        <div class="col-md-4">
            <x-card title='Pagos'>
                
                <div class="d-flex justify-content-between">
                    <div class="text-blue">
                        <h1>24534</h1>
                        <p>Pagos registrados</p>
                    </div>
                    <div class="d-flex flex-column align-items-end">
                        <i class="bi bi-credit-card-2-front-fill fs-1"></i>
                        <span>Pagos</span>
                    </div>
                </div>

                <x-slot name="footer">
                    <a href="{{route('payments.index')}}">  Ver detalles <i class="bi bi-arrow-right-circle"></i> </a>
                </x-slot>
            </x-card>
        </div>

        <div class="col-md-4">
            <x-card title='Usuarios'>
                
                <div class="d-flex justify-content-between">
                    <div class="text-blue">
                        <h1>2334</h1>
                        <p>Usuarios habilitados</p>
                    </div>
                    <div class="d-flex flex-column align-items-end">
                        <i class="bi bi-people-fill fs-1"></i>
                        <span>Usuarios</span>
                    </div>
                </div>
                <x-slot name="footer">
                    <a href="{{route('users.index')}}"> Ver detalles <i class="bi bi-arrow-right-circle"></i> </a>
                </x-slot>
            </x-card>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <x-card title='Roles'>
                
                <div class="d-flex justify-content-between">
                    <div class="text-blue">
                        <h1>34</h1>
                        <p>Roles Asignados</p>
                    </div>
                    <div class="d-flex flex-column align-items-end">
                        <i class="bi bi-toggles fs-1"></i>
                        <span>Roles</span>
                    </div>
                </div>
                <x-slot name="footer">
                    <a href="{{route('roles.index')}}"> Ver detalles <i class="bi bi-arrow-right-circle"></i> </a>
                </x-slot>
            </x-card>
        </div>
    </div>

@endsection
