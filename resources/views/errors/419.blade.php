@extends('layouts.basic')

@section('body')

    <x-error code="419" message="Ajaj! Nastala chyba. {{ $exception->getMessage() }}" />
    
@endsection