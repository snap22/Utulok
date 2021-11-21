@extends('layouts.admin')

@section('body')

<div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">
            <div class="row">
              <div class="col s8">
                <!-- <h4> Informácie </h4> -->
                <a href="{{ route('contacts.view.all') }}" class="btn btn-large btn-flat white"><i class="material-icons">keyboard_arrow_left</i></a>
              </div>
              <div class="col s4">
                <div class="right-align ">
                  <x-admin.controls.controls-all 
                    :editIcon="'done'"
                    :editLink="route('contacts.solve', ['contactId' => $contact->contact_id])" 
                    :deleteLink="route('contacts.delete', ['contactId' => $contact->contact_id])" 
                    btnStyle="btn-flat btn-large white"
                  />
                </div>
              </div>
            </div> <!-- row  -->

            <div class="card-content ">
              <span class="card-title"> <h4><b> {{ $contact->contact_title }} </b>  </h4></span>
              <div class="divider"></div>
                <div class="row">
                  <div class="row"></div>
                    <div class="row">
                      <div class="input-field col s6">
                        <i class="material-icons prefix">sell</i>
                        <input type="tel" class="validate" value="{{ $contact->contact_id }}" readonly>
                        <label>ID</label>
                      </div>
                      <div class="input-field col s6">
                        @if ($contact->solved)
                          <i class="material-icons prefix">visibility</i>
                        @else
                          <i class="material-icons prefix">visibility_off</i>
                        @endif
                        <input type="tel" class="validate" value="{{ $contact->solved ? 'Vyriešené' : 'Nevyriešené' }}" readonly>
                        <label>Stav</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <i class="material-icons prefix">person</i>
                        <input type="text" class="validate" value="{{ $contact->contact_email }}" readonly>
                        <label>Odosielateľ</label>
                      </div>
                      <div class="input-field col s6">
                        <i class="material-icons prefix">event_note</i>
                        <input type="tel" class="validate" value="{{ $contact->date_created }}" readonly>
                        <label>Dátum</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s8">
                        <i class="material-icons prefix">drafts</i>
                        <textarea id="textarea1" class="materialize-textarea" readonly>{{ $contact->contact_message }}</textarea>
                        <label for="textarea1">Správa</label>
                      </div>
                    </div>
                  </div>               
                </div> 
            </div>
          </div> <!-- card-content  -->
        
        </div> <!-- card  -->
      </div> <!-- col  -->
 </div>  <!-- row  -->


@endsection

