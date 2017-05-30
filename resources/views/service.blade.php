@extends('layouts.master')

@section('content')
    <service-overview :id="{{ $service->id }}"></service-overview>
@endsection