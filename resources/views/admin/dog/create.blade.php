@extends('layouts.admin')

@section('body')

  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s8">
          
          <form action="{{ route('dogs.store') }}" method="POST">
              @csrf
              

              <x-admin.admin-input name="name" :value="old('name', '')" label="Meno"   />
              <x-admin.admin-input name="age" type="number" :value="old('age','0')" label="Vek"   />
              
                <div class="input-field">
                    <select name="gender">
                        <option selected value="M">Samec</option>
                        <option value="F">Samica</option>
                    </select>
                    <label>Pohlavie</label>
                </div>

                <div class="input-field">
                    <select name="breed_id">
                        @foreach ($breeds as $breed)
                            <option value="{{ $breed->breed_id }}">{{ $breed->name }}</option>
                        @endforeach
                    </select>
                    <label>Plemeno</label>
                </div>
              

                <div class="file-field input-field">
                    <div class="btn">
                        <span>Obrázok</span>
                        <input type="file" name="picture">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>

                <div class="input-field ">
                    <textarea name="info" class="materialize-textarea"></textarea>
                    <label for="info">Dodatočné informácie</label>
                </div>
                @error( 'info' )
                    <span class="helper-text red-text">{{ $message }}</span>
                @enderror

              <button class="btn waves-effect waves-light green" type="submit" name="">Pridať
                <i class="material-icons right">check</i>
              </button>
              <a href="{{ route('dogs.view.all') }}" class="btn waves-effect waves-light deep-orange">Zrušiť
                <i class="material-icons right">cancel</i>
              </a>
              
          </form>
          

          
        </div>
      </div>

      
      
    </div>
  </div>


@endsection