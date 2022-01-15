@extends('layouts.admin')

@section('body')

  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s8">
          
          <form action="{{ route('accounts.update', ['accountId' => $user->account_id ]) }}" method="POST">
              @csrf
              @method('PUT')

              <x-admin.admin-input name="first_name" :value="old('first_name', $user->first_name)" label="Krstné Meno"   />
              <x-admin.admin-input name="last_name" :value="old('last_name', $user->last_name)" label="Priezvisko"   />
              <x-admin.admin-input name="email" :value="old('email', $user->email)" label="Email"   />
              <x-admin.admin-input name="phone_number" :value="old('phone_number', $user->phone_number)" label="Kontakt"   />

              @if ($user->account_id == Auth::user()->account_id)
                <div class="input-field">
                    <select name="account_role">
                        <option selected value="A">Admin</option>
                    </select>
                    <label>Rola</label>
              @else
                <div class="input-field">
                  <select name="account_role">
                    @if ($user->is_admin)
                      <option selected value="A">Admin</option>
                      <option value="U">Používateľ</option>
                    @else
                      <option value="A">Admin</option>
                      <option selected value="U">Používateľ</option>
                    @endif

                  </select>
                  <label>Rola</label>
                  @error( 'account_role' )
                      <span class="helper-text red-text">{{ $message }}</span>
                  @enderror
                </div>
              @endif
              

              <button class="btn waves-effect waves-light green" type="submit">Uložiť
                <i class="material-icons right">check</i>
              </button>
              <a href="{{ route('accounts.view.all') }}" class="btn waves-effect waves-light deep-orange">Zrušiť
                <i class="material-icons right">cancel</i>
              </a>
              
          </form>  
        </div>
      </div>
    </div>
  </div>


@endsection