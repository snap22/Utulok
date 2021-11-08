@extends('layouts.admin')

@section('body')

   
<h4> Psy </h4>
<hr>

<table class="striped centered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Meno</th>
    </tr>
    </thead>

    <tbody>

        @foreach ($dogs as $dog)
        <tr>
            <td > {{ $dog->dog_id }} </td>
            <td> {{ $dog->name }} </td>
            <!-- <td > <a href="route('accounts.view', ['accountId' => $user->account_id])" class="black-text"> {{ $dog->name }} </a> </td> -->
            <td class="right-align">
                <!-- <x-admin.controls.controls-all 
                    viewLink="route('accounts.view', ['accountId' => $user->account_id])" 
                    editLink="route('accounts.edit', ['accountId' => $user->account_id])" 
                    deleteLink="route('accounts.delete', ['accountId' => $user->account_id])" 
                /> -->
                <x-admin.controls.controls-all 
                    :viewLink="route('dogs.view', ['dogId' => $dog->dog_id])" 
                    :editLink="'#'" 
                    :deleteLink="'#'" 
                />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection