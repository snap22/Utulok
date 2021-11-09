@extends('layouts.admin')

@section('body')

  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s8">
          
          <form action="{{ route('dogs.update', ['dogId' => $dog->dog_id]) }}" method="POST">
              @csrf
              @method('PUT')

              <x-admin.admin-input name="name" :value="old('name', $dog->name)" label="Meno"   />
              <x-admin.admin-input name="age" type="number" :value="old('age', $dog->age)" label="Vek"   />
              
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
                            @if ($breed->breed_id == $dog->breed_id)
                                <option selected value="{{ $breed->breed_id }}">{{ $breed->name }}</option>
                            @else
                                <option value="{{ $breed->breed_id }}">{{ $breed->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <label>Plemeno</label>
                </div>
              

                <div class="file-field input-field">
                    <div class="btn">
                        <span>Obrázok</span>
                        <input type="file" name="picture" value="{{ old('picture', $dog->picture) }}">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>

                <div class="input-field ">
                    <textarea name="info" class="materialize-textarea">{{ old('info', $dog->info) }}</textarea>
                    <label for="info">Dodatočné informácie</label>
                </div>
                @error( 'info' )
                    <span class="helper-text red-text">{{ $message }}</span>
                @enderror

              <button class="btn waves-effect waves-light green" type="submit" name="">Uložiť
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