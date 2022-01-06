@extends('layouts.app', ['title' => $title])

@section('content')

    <div class="row">
        <!-- User information card -->
        <div class="col-md-6">
            <x-card title="Información del usuario">
                <ul class="list-unstyled">
                    <li><span class="text-blue">Nombre:</span> {{ auth()->user()->names ?? '' }}</li>
                    <li><span class="text-blue">Email:</span> {{ auth()->user()->email ?? '' }}</li>
                </ul>
            </x-card>

            <!-- Payments for month card -->
            <div class="mt-4">
                <x-card title="Historial de pagos">
                    <x-accordion>
                        <x-accordion-tab title="Diciembre 2021">
                            <ul class="list-unstyled">
                                <li class="fw-bold">29 Diciembre 2021</li>
                                <li>C$ 390.09</li>
                            </ul>
                            <a href="#" class="text-info">
                                <i class="bi bi-download"></i>
                                Ver factura
                            </a>
                        </x-accordion-tab>

                        <x-accordion-tab title="Noviembre 2021">
                            <ul class="list-unstyled">
                                <li class="fw-bold">29 Noviembre 2021</li>
                                <li>C$ 489.36</li>
                            </ul>
                            <a href="#" class="text-info">
                                <i class="bi bi-download"></i>
                                Ver factura
                            </a>
                        </x-accordion-tab>

                        <x-accordion-tab title="Octubre 2021">
                            <ul class="list-unstyled">
                                <li class="fw-bold">29 Octubre 2021</li>
                                <li>C$ 4390.99</li>
                            </ul>
                            <a href="#" class="text-info">
                                <i class="bi bi-download"></i>
                                Ver factura
                            </a>
                        </x-accordion-tab>
                    </x-accordion>

                    <x-slot name="footer">
                        <a class="text-blue" href="{{ route('payments.index') }}">
                            Ver todas
                        </a>
                    </x-slot>
                </x-card>
            </div>
        </div>

        <!-- Last bill card -->
        <div class="col-md-6">
            <div class="row">

                <div class="col-md-5">
                    <div class="d-flex justify-content-end px-2 rounded-3 bg-light pt-2 pb-0 text-center">
                        <p class="fw-bold text-blue "><i class="bi bi-info-circle"></i> Cambio dolar: {{$exchangeRate}}</p>
                    </div>
                </div>
                
                <div class="col-md-7 d-flex justify-content-end">
                    <form class=" bg-transparent p-0">
                        <div class="input-group mb-4 w-100">
                            <label>
                                <input type="email" class="form-control" placeholder="Barra de busqueda"/>
                            </label>
                            <span class="input-group-btn">
                                <button class="btn bg-blue-gradient" type="submit">
                                    <i class="bi bi-search text-white"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>

            </div>

            <x-card title="Ultimo pago">
                <div class="mb-3">
                    <h2 class="text-blue fs-1">C$ {{$latestPayment->amount}}</h2>
                </div>

                <div class="row">
                    <div class="col-md-6 text-blue">
                        <p>Numero de pago</p>
                        <p>Fecha de registro</p>
                        <p>Fecha de Pago</p>
                        <p>Estado</p>
                    </div>

                    <div class="col-md-6">
                        <p>{{$latestPayment->id}}</p>
                        <p>{{$latestPayment->payment_registration_date}}</p>
                        <p>{{$latestPayment->date_made_payment}}</p>
                        <p class="text-{{$latestPayment->status === 'Pendiente' ? 'danger' : 'success'}}">
                            {{$latestPayment->status}}
                        </p>
                    </div>
                </div>

                <x-slot name="footer">
                    <a href="{{route('payments.show', $latestPayment->id)}}" class="text-blue">Ver factura</a>
                </x-slot>
            </x-card>
        </div>
    </div>
@endsection
