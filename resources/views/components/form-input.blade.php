@props(['name', 'value' => '', 'type' => 'text', 'placeholder'])

<input  name="{{ $name }}" 
        type="{{ $type }}" 
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
