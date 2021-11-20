@extends('layouts.admin')




@section('body')

   
<h4> Používatelia</h4>
<hr>

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
            <td > 
                <a href="{{ route('accounts.view', ['accountId' => $user->account_id]) }}" class="black-text"> {{ $user->email }} 
                    @if ($user->is_admin)
                        <i class="material-icons tiny">shield</i>
                    @endif
                </a> 
            </td>
            <td> {{ $user->first_name }} </td>
            <td> {{ $user->last_name }} </td>
            <td class="right-align">
                <x-admin.controls.controls-all 
                    :viewLink="route('accounts.view', ['accountId' => $user->account_id])" 
                    :editLink="route('accounts.edit', ['accountId' => $user->account_id])" 
                    :deleteLink="route('accounts.delete', ['accountId' => $user->account_id])" 
                />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $users->links() }}

@endsection