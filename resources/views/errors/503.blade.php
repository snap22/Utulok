@extends('layouts.basic')

@section('body')

    <x-error code="503" message="Ajaj! Nastala chyba zo strany servera. {{ $exception->getMessage() }}" />
    
@endsection
