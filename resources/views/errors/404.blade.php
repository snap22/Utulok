@extends('layouts.basic')

@section('body')
    <div class="text-center">
        <h1 class="display-1 text-danger"> 404 </h1> <br>
        <h2 class="display-4">Ajaj! Nastala chyba {{ $exception->getMessage() }}</h2>
    </div>
@endsection