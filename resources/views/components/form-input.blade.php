@props(['name', 'type' => 'text', 'placeholder'])

<input  value="{{ old($name) }}" 
        name="{{ $name }}" 
        type="{{ $type }}" 
        placeholder="{{ $placeholder }}" 
        {{ $attributes->merge(['class' => "form-control"]) }} >

@error(  $name  )
    <div class="text-danger">
        <p class="text-sm"> {{ $message }} </p>
    </div>
@enderror