@extends('layouts.backend-dashboard.app')
@section('title','Parkir Keluar')
@section('breadcrumb','Parkir / Keluar')
@section('content')
  @include('Parkirs.Edit.html')
@endsection

@section('extra_javascript')
  @include('Parkirs.Edit.javascript')
@endsection
