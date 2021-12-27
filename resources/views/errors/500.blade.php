@extends('layouts.basic')

@section('body')

    <x-error code="500" message="Ajaj! Nastala chyba zo strany servera. {{ $exception->getMessage() }}" />
    
@endsection