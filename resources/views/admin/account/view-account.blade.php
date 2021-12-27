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
                  <x-admin.controls.controls-all 
                    :editLink="route('accounts.edit', ['accountId' => $user->account_id])" 
                    :deleteLink="route('accounts.delete', ['accountId' => $user->account_id])" 
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
                  <td> {{ $user->date_created->format("d .m. Y")}} </td>
                </tr>
                <tr>
                  <td> <b> Rola </b> </td>
                  <td> {{ $user->is_admin ? 'Admin' : 'Používateľ' }} </td>
                </tr>
              </table>
            </div> 
            @if (isset($address))
              <ul class="collapsible">
                <li class="active">
                  <div class="collapsible-header"><i class="material-icons">cottage</i>Adresa</div>
                  <div class="collapsible-body">
                    <table>
                      <tr>
                        <td> <b> ID </b></td>
                        <td> {{ $address->address_id }}</td>
                      </tr>
                      <tr>
                        <td> <b> Ulica </b></td>
                        <td> {{ $address->street }}</td>
                      </tr>
                      <tr>
                        <td> <b> Číslo domu</b> </td>
                        <td> {{ $address->house_number }}</td>
                      </tr>
                      <tr>
                        <td>  <b>Mesto </b></td>
                        <td> {{ $address->city }}</td>
                      </tr>
                      <tr>
                        <td>  <b>PSČ </b></td>
                        <td> {{ $address->zip_code }}</td>
                      </tr>
                      <tr>
                        <td>  <b>Doplňujúce informácie </b></td>
                        <td> {{ $address->additional_info }}</td>
                      </tr>
                    </table>
                  </div>
                </li>
              </ul>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection