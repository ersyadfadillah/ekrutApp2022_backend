@extends('layouts.backend-dashboard.app')
@section('title','Parkir')
@section('breadcrumb','Parkir')
@section('content')
  @include('Parkirs.html')
@endsection
@section('extra_javascript')
  @include('Parkirs.javascript')
@endsection