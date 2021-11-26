@extends('layouts.admin')

@section('body')

<div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
              <div class="col s8">
                <!-- <h4> Informácie </h4> -->
                <a href="{{ route('adoptions.view.all') }}" class="btn btn-large btn-flat white"><i class="material-icons">keyboard_arrow_left</i></a>
              </div>
              <div class="col s4">
                <div class="right-align ">
                  <x-admin.controls.controls-all 
                    :deleteLink="route('adoptions.delete', ['adoptionId' => $adoption->adoption_id])" 
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
                  <td> {{ $adoption->adoption_id }} </td>
                </tr>
                <tr>
                  <td> <b> Dátum </b> </td>
                  <td> {{ $adoption->date_adopted }} </td>
                </tr>
                <tr>
                  <td> <b> Pes </b> </td>
                  <td> <a href="{{ route('dogs.view', ['dogId' => $adoption->dog_id }}"> {{ $adoption->dog_id }} </a> </td>
                </tr>
                <tr>
                  <td> <b> Užívateľ </b> </td>
                  <td> <a href="{{ route('accounts.view', ['accountId' => $adoption->account_id }}"> {{ $adoption->account_id }} </a> </td>
                </tr>
              </table>
              
            </div> 
            

          </div>
        </div>
       
      </div>
    </div>
  </div>
@endsection

