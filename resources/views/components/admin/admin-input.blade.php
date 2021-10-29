@props(['name', 'value' => '', 'type' => 'text', 'label' => 'Input'])

<div class="input-field">
    <input 
        name="{{ $name }}" 
        type="{{ $type }}" 
        value="{{ $value }}"
        class="validate"
    >
    <label for="{{ $name }}">{{ $label }}</label>

    @error( $name )
        <span class="helper-text" data-error="{{ $message }}" data-success="right"></span>
    @enderror
</div>

