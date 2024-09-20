@extends('layouts.app')

@section('title', 'Listagem de serviços')

@section('content')
    <div class='container'>
        <h2 class='text-center' id="titulo"> {{ __('Services - List of Services') }}</h2>

        <a href="{{ route('services.create') }}" class="btn btn-success mb-2">
            <i class="bi bi-plus-square"></i>
        </a>

        @if (session('message-success'))
            @component('app.services._components.message', ['message' => session('message-success')])
            @endcomponent
        @endif

        <table class='table table-light table-striped table-bordered'>
            <thead>
                <tr>
                    @foreach ($attributes as $attribute)
                        <th scope='col'>{{ Str::upper(__($attribute)) }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class='table-group-divider'>
                @foreach ($services as $key => $service)
                    <tr scope='row'>
                        <td class='fw-bold'>{{ $service->id }}</td>
                        <td class='text-wrap'>{{ $service->name }}</td>
                        <td>R$ {{ number_format($service->price, 2, ',', '.') }} reais</td>
                        <td>{{ $service->duration }} min</td>
                        <td class="text-center"><a href="" class="btn btn-primary">Editar</a></td>
                        <td class="text-center"><a href="" class="btn btn-danger">Deletar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label='Page navigation Service'>
            <ul class='pagination justify-content-center'>
                <li class="page-item">
                    <a class="page-link" href="{{ $services->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @for ($i = 1; $i <= $services->lastPage(); $i++)
                    <li class='page-item {{ $services->currentPage() === $i ? 'active' : '' }}'>
                        <a class='page-link' href='{{ $services->url($i) }}'>{{ $i }}</a>
                    </li>
                @endfor
                <li class='page-item'>
                    <a class="page-link" href="{{ $services->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/views/services/index.css') }}">
@endpush
