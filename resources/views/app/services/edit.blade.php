@extends('layouts.app')

@section('title', 'Editando Serviço')

@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col'>
                <h2 class='text-center'>Serviços - Edição de Serviço</h2>
            </div>
        </div>
        <div class='row justify-content-center'>
            <div class='col-6'>
                @component('app.services._components.form_create_edit', [
                    'service' => $service,
                    'modalName' => $modalName,
                    'modalTitle' => $modalTitle,
                    'modalMessage' => $modalMessage,
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel='stylesheet' href='{{ asset('css/views/services/form.css') }}'>
@endpush

@push('scripts')
    <script src='{{ asset('js/views/services/form.js') }}'></script>
@endpush
