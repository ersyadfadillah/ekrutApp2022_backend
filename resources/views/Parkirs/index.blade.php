@extends('layouts.backend-dashboard.app')
@section('title','Parkir Monitoring')
@section('breadcrumb','Parkir / Monitoring')
@section('content')
  @include('Parkirs.html')
@endsection
@section('extra_javascript')
  @include('Parkirs.javascript')
@endsection