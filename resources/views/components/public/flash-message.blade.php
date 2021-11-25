@props(['type' => 'success', 'message'])

<div role="alert" {{ $attributes->merge([ "class" => "text-center position-fixed alert alert-dismissible fade show alert-".$type]) }}  >
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>