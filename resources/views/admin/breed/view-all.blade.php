@extends('layouts.admin')

@section('body')

   
<div class="row">
    <div class="col s10">
        <h4> Prehľad plemien psov </h4>
    </div>
    <div class="col ">
        <a href="{{ route('breeds.create') }}" class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">add</i></a>
    </div>

    
</div>
<hr>

<table class="striped centered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Názov</th>
        <th></th>
    </tr>
    </thead>

    <tbody>

        @foreach ($breeds as $breed)
        <tr>
            <td > {{ $breed->breed_id }} </td>
            <td> {{ $breed->name }} </td>
            <td class="right-align">
                <x-admin.controls.controls-all 
                    :deleteLink="route('breeds.delete', ['breedId' => $breed->breed_id])" 
                />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


{{ $breeds->links() }}


@endsection