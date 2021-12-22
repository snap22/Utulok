@props(['dogId'])

<div id="adoptionCancel">
    O tohto chlpáča ste už prejavili záujem! 
    <form action="" method="POST"> 
        @csrf
        @method('DELETE')
        <button class="btn btn-lg contact-button text-danger" type="button" onclick="sendDeleteRequest(this, '{{ $dogId }}')">Zrušiť</button>  
    </form>
</div>