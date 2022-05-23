@extends('layouts.backend-dashboard.app')
@section('title','Parkir Laporan')
@section('breadcrumb','Parkir / Laporan')
@section('content')
@include('Parkirs.laporan.html')
@endsection
@section('extra_javascript')
@include('Parkirs.laporan.javascript')
@endsection