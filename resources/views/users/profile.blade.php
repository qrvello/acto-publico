@extends('layouts.index')

@section('title', 'Perfil')

@section('content')
<h1>{{$user->name}}</h1>
@endsection
