@extends('layouts.admin')

@section('body')

   
<div class="row">
    <div class="col s10">
        <h4> Psy </h4>
    </div>
    <div class="col ">
        <a href="{{ route('dogs.create') }}" class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
    </div>

    
</div>
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
            <td class="right-align">
                <x-admin.controls.controls-all 
                    :viewLink="route('dogs.view', ['dogId' => $dog->dog_id])" 
                    :editLink="route('dogs.edit', ['dogId' => $dog->dog_id])" 
                    :deleteLink="route('dogs.delete', ['dogId' => $dog->dog_id])" 
                />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection