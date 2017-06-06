@extends('layouts.master')

@section('content')
    <program-overview :id="{{ $program->id }}"></program-overview>
@endsection