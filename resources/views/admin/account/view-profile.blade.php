@extends('layouts.admin')

@section('body')

<div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
              <div class="col s8">
                <h4> Informácie </h4>
              </div>

              <div class="col s4">
                <div class="right-align ">
                  
                  <a class="btn-floating btn waves-effect waves-light light-blue"><i class="material-icons">create</i></a>
                  <a class="btn-floating btn waves-effect waves-light deep-orange"><i class="material-icons">delete</i></a>
                </div>
          
              </div>
          </div>
          

          

          <div class="divider"></div>
          <div class="">
            <div class="">
              <table class="highlight">
                <tr>
                  <td> <b> ID </b> </td>
                  <td> {{ $user->account_id }} </td>
                </tr>
                <tr>
                  <td> <b> Krstné meno </b> </td>
                  <td> {{ $user->first_name }} </td>
                </tr>
                <tr>
                  <td> <b> Priezvisko </b> </td>
                  <td> {{ $user->last_name }} </td>
                </tr>
                <tr>
                  <td> <b> Email </b> </td>
                  <td> {{ $user->email }}  </td>
                </tr>
                <tr>
                  <td> <b> Kontakt </b> </td>
                  <td> {{ $user->phone_number}} </td>
                </tr>
                <tr>
                  <td> <b> Dátum vytvorenia účtu </b> </td>
                  <td> {{ $user->date_created}} </td>
                </tr>
                <tr>
                  <td> <b> Rola </b> </td>
                  <td> {{ $user->is_admin ? 'Admin' : 'Používateľ' }} </td>
                </tr>
              </table>
            </div> 
            

          </div>
        </div>
        <!-- <div class="card-action">
          <a href="#">This is a link</a>
        </div> -->
      </div>
    </div>
  </div>
@endsection