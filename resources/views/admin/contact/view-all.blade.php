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
            <td > <a href="{{ route('contacts.view', ['contactsId' => $contact->contact_id ]) }}" class="black-text"> {{ $contact->contact_title }} </a> </td>
            <td> {{ $contact->email }} </td>
            <td> {{ $contact->date_created }} </td>
            <td class="right-align">
                <x-admin.controls.controls-all 
                    :viewLink="route('contacts.view', ['accountId' => $contact->contact_id])" 
                    :deleteLink="route('contacts.delete', ['accountId' => $contact->contact_id])" 
                />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection