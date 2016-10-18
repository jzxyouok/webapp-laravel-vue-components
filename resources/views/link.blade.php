@extends('layout')
@section('title', 'titleName')
@section('body')
@include('navbar')

<div class="jumbotron">
  <div class="container">
    @include('components/demo')
    @include('components/demo2')
  </div>
</div>

@stop
