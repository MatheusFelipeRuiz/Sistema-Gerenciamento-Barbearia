@if ($type === 'create')
    <form action='{{ route('services.store') }}' method='post' class='needs-validation' novalidate>
    @else
        <form action='{{ route('services.update') }}' method='post' class='needs-validation' novalidate>
            @method('PUT')
@endif

@csrf
<div class='form-group mb-2'>
    <label for='name'>{{ __('Name') }}</label>
    <input type='text' name='name' id='name' class='form-control' value="{{ old('name') }}" required>

    @error('name')
        <div class="alert alert-danger mt-1" role="alert">
            {{ $errors->has('name') ? $errors->first('name') : '' }}
        </div>
    @enderror
</div>
<div class='form-group'>
    <label for='description'>{{ __('Description') }}</label>
    <textarea id='description' name='description' class='form-control' required>{{ old('description') }}</textarea>

    @error('description')
        <div class="alert alert-danger mt-1" role="alert">
            {{ $errors->has('description') ? $errors->first('description') : '' }}
        </div>
    @enderror
</div>
<div class='form-group'>
    <label for=''>{{ __('Price') }}</label>
    <input type='text' name='price' id='price' class='form-control' value="{{ old('price') }}" required>
    @error('price')
        <div class="alert alert-danger mt-1" role="alert">
            {{ $errors->has('price') ? $errors->first('price') : '' }}
        </div>
    @enderror
</div>
<div class='form-group'>
    <label for=''>{{ __('Duration') }}:</label>
    <input type='text' name='duration' id='duration' class='form-control' value="{{ old('duration') }}" required>
    @error('duration')
        <div class="alert alert-danger mt-1" role="alert">
            {{ $errors->has('duration') ? $errors->first('duration') : '' }}
        </div>
    @enderror
</div>
<div class='text-center mt-2'>
    <button type='submit' class='btn btn-success'>Cadastrar</button>
</div>
</form>
