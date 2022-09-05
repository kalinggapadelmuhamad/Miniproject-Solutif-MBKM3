@extends('Dashboard.Layout.header')
@section('container')
    <h1>Hallo {{ auth()->user()->name }}</h1>
@endsection