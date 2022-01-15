@props(['dogId'])

<div id="adoptionCreate">
    <form method="POST"> 
        @csrf
        <button class="btn btn-lg btn-warning contact-button" type="button" onclick="sendRequest(this, '{{ $dogId }}')">Chcem ho!</button>  
    </form>
</div>