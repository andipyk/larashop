@extends('layouts.global')

@section('title') Users list @endsection 

@section('content')

  Daftar user di sini

  @foreach($users as $user)
  - {{$user->email}} <br/>
  @endforeach 

@endsection  