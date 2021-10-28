@props(['name', 'value' => '', 'type' => 'text', 'placeholder'])

<input  name="{{ $name }}" 
        type="{{ $type }}" 
        placeholder="{{ $placeholder }}" 
        value="{{ $value }}"
        {{ $attributes->merge(['class' => "form-control"]) }} >

@error(  $name  )
    <div class="text-danger">
        <p class="text-sm"> {{ $message }} </p>
    </div>
@enderror