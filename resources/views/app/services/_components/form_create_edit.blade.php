@if (!isset($service))
    <form action='{{ route('services.store') }}' method='post' class='needs-validation' novalidate>
    @else
        <form action='{{ route('services.update', ['service' => $service]) }}' method='post' class='needs-validation'
            novalidate>
            @method('PUT')
@endif

@csrf

<div class='form-group mb-2'>
    <label for='name'>{{ __('Name') }}</label>
    <input type='text' name='name' id='name' class='form-control' value="{{ $service->name ?? old('name') }}"
        required>

    @error('name')
        <div class="alert alert-danger mt-1" role="alert">
            {{ $errors->has('name') ? $errors->first('name') : '' }}
        </div>
    @enderror
</div>

<div class='form-group'>
    <label for='description'>{{ __('Description') }}</label>
    <textarea id='description' name='description' class='form-control' required>{{ $service->description ?? old('description') }}</textarea>

    @error('description')
        <div class="alert alert-danger mt-1" role="alert">
            {{ $errors->has('description') ? $errors->first('description') : '' }}
        </div>
    @enderror
</div>

<div class='form-group'>
    <label for=''>{{ __('Price') }}</label>
    <input type='text' name='price' id='price' class='form-control'
        value="{{ $service->price ?? old('price') }}" required>
    @error('price')
        <div class="alert alert-danger mt-1" role="alert">
            {{ $errors->has('price') ? $errors->first('price') : '' }}
        </div>
    @enderror
</div>

<div class='form-group'>
    <label for=''>{{ __('Duration') }}:</label>
    <input type='text' name='duration' id='duration' class='form-control'
        value="{{ $service->duration ?? old('duration') }}" required>
    @error('duration')
        <div class="alert alert-danger mt-1" role="alert">
            {{ $errors->has('duration') ? $errors->first('duration') : '' }}
        </div>
    @enderror
</div>

@component('app.services._components.confirm_modal', [
    'modalName' => $modalName,
    'modalTitle' => $modalTitle,
    'modalMessage' => $modalMessage,
])
@endcomponent

<div class='text-center mt-2'>
    <button type="button" class="btn {{ isset($service) ? 'btn-primary' : 'btn-success' }}" data-bs-toggle="modal"
        data-bs-target="#{{ $modalName }}">
        {{ isset($service) ? 'Editar' : 'Cadastrar' }}
    </button>
</div>
</form>
