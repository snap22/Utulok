@extends('layouts.basic')

@section('body')

    <x-error code="403" message="Ajaj! Nastala chyba. {{ $exception->getMessage() }}" />
    
@endsection
