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
                  <td> {{ $contact->contact_id }} </td>
                </tr>
                <tr>
                  <td> <b> Titul </b> </td>
                  <td> {{ $contact->contact_title }} </td>
                </tr>
                <tr>
                  <td> <b> Odosielateľ </b> </td>
                  <td> {{ $contact->contact_email }} </td>
                </tr>
                <tr>
                  <td> <b> Správa </b> </td>
                  <td> {{ $contact->contact_message }} </td>
                </tr>
                <tr>
                  <td> <b> Dátum</b> </td>
                  <td> {{ $contact->date_created }} </td>
                </tr>
                <tr>
                  <td> <b> Stav </b> </td>
                  <td> {{ $contact->solved ? 'Vyriešené' : 'Nevyriešené' }}  </td>
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

