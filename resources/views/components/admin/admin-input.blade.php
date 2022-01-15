@props(['name', 'value' => '', 'type' => 'text', 'label' => 'Input'])

<div class="input-field">
    <input 
        name="{{ $name }}" 
        id="{{ $name }}"
        type="{{ $type }}" 
        value="{{ $value }}"
        class="validate"
    >
    <label for="{{ $name }}">{{ $label }}</label>

    @error( $name )
        <span class="helper-text red-text" >{{ $message }}</span>
    @enderror
</div>

