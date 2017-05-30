@extends('layouts.master')

@section('content')
    <department-overview :id="{{ $department->id }}"></department-overview>
@endsection