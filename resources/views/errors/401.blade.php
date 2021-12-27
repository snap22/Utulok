@extends('layouts.basic')

@section('body')

    <x-error code="401" message="Ajaj! Nastala chyba. {{ $exception->getMessage() }}" />
    
@endsection