@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

{{ Auth::check() ? 'LOGIN' : 'LOGOUT' }}

@endsection