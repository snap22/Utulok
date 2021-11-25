@props(['name', 'value' => '', 'type' => 'text', 'placeholder' => '', 'label'])

<div>
    @if (isset($label))
        <label for="{{ $name }}" class="input-text" > 
            
                {{ $label }}
            
        </label>
    @endif
    <input  name="{{ $name }}" 
            type="{{ $type }}" 
            placeholder="{{ $placeholder }}" 
            value="{{ $value }}"
            {{ $attributes->merge(['class' => "form-control"]) }} >
</div>

<div class="text-danger">
    <p class="text-sm"> 
        @error(  $name  )
            {{ $message }} 
        @enderror
    </p>
</div>
