@extends('master_user')
@section('title')
{{ Auth::user()->name }} | | Dashboard
@stop
@section('content')

@endsection
