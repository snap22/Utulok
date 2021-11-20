@extends('layouts.admin')




@section('body')

   
<h4> Správy</h4>
<hr>

<table class="striped centered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Titul</th>
        <th>Email</th>
        <th>Dátum</th>
    </tr>
    </thead>

    <tbody>

        @foreach ($contacts as $contact)
        <tr>
            <td > {{ $contact->contact_id }} </td>
            <td >  
                @if (! $contact->solved)
                    <b> <a href="{{ route('contacts.view', ['contactId' => $contact->contact_id ]) }}" class="black-text"> {{ $contact->contact_title }} </b>
                @else
                    <a href="{{ route('contacts.view', ['contactId' => $contact->contact_id ]) }}" class="black-text"> {{ $contact->contact_title }} </a> 
                @endif
            </td>
            <td> {{ $contact->email }} </td>
            <td> {{ $contact->date_created }} </td>
            <td class="right-align">
                <x-admin.controls.controls-all 
                    :viewLink="route('contacts.view', ['contactId' => $contact->contact_id])" 
                    :deleteLink="route('contacts.delete', ['contactId' => $contact->contact_id])" 
                />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $contacts->links() }}

@endsection