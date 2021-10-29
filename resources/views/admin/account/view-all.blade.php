@extends('layouts.admin')




@section('body')

   
<h3> Používatelia</h3>

<table class="striped centered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Meno</th>
        <th>Priezvisko</th>
    </tr>
    </thead>

    <tbody>

        @foreach ($users as $user)
        <tr>
            <td > {{ $user->account_id }} </td>
            <td > <a href="#" class="black-text"> {{ $user->email }} </a> </td>
            <td> {{ $user->first_name }} </td>
            <td> {{ $user->last_name }} </td>
            <td class="right-align">
                <a href="{{ route('accounts.view', ['accountId' => $user->account_id]) }}"><i class="material-icons blue-grey-text">visibility</i> </a>
                <a href="#"><i class="material-icons light-blue-text">create</i> </a>
                <a href="#"><i class="material-icons deep-orange-text">delete</i> </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection