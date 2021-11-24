@extends('layouts.admin')

@section('body')

  <div class="card">
    <div class="card-content">
      <div class="row">
        <div class="col s8">
          
          <form action="{{ route('breeds.store') }}" method="POST">
              @csrf
              
              <x-admin.admin-input name="name" :value="old('name', '')" label="Názov"   />
              
              <button class="btn waves-effect waves-light green" type="submit" name="">Pridať
                <i class="material-icons right">check</i>
              </button>

              <a href="{{ route('breeds.view.all') }}" class="btn waves-effect waves-light deep-orange">Zrušiť
                <i class="material-icons right">cancel</i>
              </a>
              
          </form>
        </div>
      </div>  
    </div>
  </div>


@endsection