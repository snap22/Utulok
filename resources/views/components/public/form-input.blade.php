@props(['name', 'value' => '', 'type' => 'text', 'placeholder' => '', 'label'])


@if (isset($label))
    <label for="{{ $name }}" class="input-text" > 
        
            {{ $label }}
        
    </label>
@endif
<input  name="{{ $name }}" 
        type="{{ $type }}" 
        id="{{ $name }}"
        placeholder="{{ $placeholder }}" 
        value="{{ $value }}"
        {{ $attributes->merge(['class' => "form-control"]) }} >

<div class="text-danger">
    <p class="text-sm"> 
        @error(  $name  )
            {{ $message }} 
        @enderror
    </p>
</div>
