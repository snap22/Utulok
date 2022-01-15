@props(['name', 'value' => '', 'type' => 'text', 'placeholder'])

<div>
  <textarea class="form-control" 
        name="{{ $name }}" 
        id="{{ $name}}"
        placeholder="{{ $placeholder }}" 
        {{ $attributes->merge(['class' => "form-control"]) }} 
  >{{ $value }}</textarea>
    
  <div class="text-danger">
    <p class="text-sm"> 
        @error(  $name  )
            {{ $message }} 
        @enderror
    </p>
    </div>
</div>


