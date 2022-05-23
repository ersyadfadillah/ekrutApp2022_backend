@extends('layouts.backend-dashboard.app')
@section('title','Parkir Masuk')
@section('breadcrumb','Parkir / Masuk')
@section('content')
  @include('Parkirs.Create.html')
@endsection

@section('extra_javascript')
  @include('Parkirs.Create.javascript')
@endsection
