@props(['name', 'value' => '', 'type' => 'text', 'placeholder'])

<div class="input-group">
  <textarea class="form-control" 
        name="{{ $name }}" 
        placeholder="{{ $placeholder }}" 
        value="{{ $value }}"
        {{ $attributes->merge(['class' => "form-control"]) }} 
  >{{ $value }}</textarea>
</div>

<div class="text-danger">
    <p class="text-sm"> 
        @error(  $name  )
            {{ $message }} 
        @enderror
    </p>
</div>
