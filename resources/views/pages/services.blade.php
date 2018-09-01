@extends('layouts.app')

@section('content')

<h1> {{$title}} </h1>
<ul class="list-group">
@if(count($bullets)>0)
@foreach($bullets as $bullet)

<li class="list-group-item">{{$bullet}}</li>

@endforeach
</ul>
@endif
@endsection