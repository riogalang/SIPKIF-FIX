@extends('layouts.app')

@section('content')
   <h1>{{$title}}</h1>
   @if (count($contacts) > 0)
      <ul class="list-group">
         @foreach ($contacts as $contact => $contact_value)
            <li class="list-group-item">{{$contact.': '.$contact_value}}</li>
         @endforeach     
      </ul>
   @endif
@endsection