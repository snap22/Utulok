@props(['viewLink', 'editLink', 'deleteLink', 'btnStyle' => 'btn-flat'])
<form action="{{ $deleteLink }}" method="POST">
    @csrf
    @method('DELETE')

    @if (isset($viewLink))
    <a href="{{ $viewLink }}" class="{{ $btnStyle }}"><i class="material-icons blue-grey-text  ">visibility</i> </a>
    @endif

    @if (isset($editLink))
    <a href="{{ $editLink }}" class="{{ $btnStyle }}"><i class="material-icons light-blue-text ">create</i> </a>
    @endif

    <button type="submit" class="{{ $btnStyle }}">
        <i class="material-icons deep-orange-text">delete</i>
    </button>
    
    
</form>