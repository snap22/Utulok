@extends('layouts.admin')

@section('body')

   
<div class="row">
    <div class="col s10">
        <h4> Prehľad adopcií </h4>
    </div>
</div>
<hr>

<table class="striped centered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Dátum</th>
    </tr>
    </thead>

    <tbody>

        @foreach ($adoptions as $adoption)
        <tr>
            <td > {{ $adoption->adoption_id }} </td>
            <td> {{ $adoption->date_adopted }} </td>
            <td class="right-align">
                <x-admin.controls.controls-all 
                    :viewLink="route('adoptions.view', ['adoptionId' => $adoption->adoption_id])" 
                    :deleteLink="route('adoptions.delete', ['adoptionId' => $adoption->adoption_id])" 
                />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


{{ $adoptions->links() }}


@endsection