@props([
    'id', 
    'name', 
    'label', 
    'type' => 'text', 
    'value' => '', 
    'class' => 'form-control',
    'placeholder'
    ])

<div class="form-group">
    <label for="{{ $id }}">{{ $label }}</label>
    <input name="{{ $name }}" type="{{ $type }}" id="{{ $id }}" placeholder="{{$placeholder ?? 'Enter '.$label }}"
        class="{{ $class }} @error($name)is-invalid @enderror" value="{{ $value }}">
    @error($name)
    <div class="invalid-feedback">
        <i class="bx bx-radio-circle"></i>
        {{ $message }}
    </div>
    @enderror
</div>