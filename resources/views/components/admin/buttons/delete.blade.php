@props(['link'])
<form action="{{ $link }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn-flat">
        <i class="material-icons deep-orange-text">delete</i>
    </button>
</form>

