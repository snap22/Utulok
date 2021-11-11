@extends('layouts.admin')

@section('body')

<div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
              <div class="col s8">
                <!-- <h4> Informácie </h4> -->
                <a href="{{ route('dogs.view.all') }}" class="btn btn-large btn-flat white"><i class="material-icons">keyboard_arrow_left</i></a>
              </div>
              <div class="col s4">
                <div class="right-align ">
                  <x-admin.controls.controls-all 
                    :editLink="route('dogs.edit', ['dogId' => $dog->dog_id])" 
                    :deleteLink="route('dogs.delete', ['dogId' => $dog->dog_id])" 
                    btnStyle="btn-flat btn-large white"
                  />
                </div>
          
              </div>
          </div>
          <div class="divider"></div>
          <div class="">
            <div class="">
              <table class="highlight">
                <tr>
                  <td> <b> ID </b> </td>
                  <td> {{ $dog->dog_id }} </td>
                </tr>
                <tr>
                  <td> <b> Meno </b> </td>
                  <td> {{ $dog->name }} </td>
                </tr>
                <tr>
                  <td> <b> Plemeno </b> </td>
                  <td> {{ $dog->breed }} </td>
                </tr>
                <tr>
                  <td> <b> Vek </b> </td>
                  <td> {{ $dog->age }} </td>
                </tr>
                <tr>
                  <td> <b> Pohlavie</b> </td>
                  <td> {{ $dog->gender == 'M' ? 'Samec' : 'Samica' }} </td>
                </tr>
                <tr>
                  <td> <b> Info </b> </td>
                  <td> {{ $dog->info }}  </td>
                </tr>
                <tr>
                  <td> <b> Obrázok </b> </td>
                  <td> {{ $dog->picture}} </td>
                </tr>
                
                
              </table>

              <img class="responsive-img" width="200px"  height="200px" src="{{ asset('storage/' . $dog->picture) }}" alt="Obrázok psa">
            </div> 
            

          </div>
        </div>
       
      </div>
    </div>
  </div>
@endsection

