@extends('layouts.app')

@section('content')
    <div class="container text-center">
        @auth
            <object base="/flashclient/" height="480" width="772" data="/flashclient/Panfu.swf?iServer=http://localhost:8000/InformationServer/&langId=EN&mode=dev&user={{Auth::user()->name}}&sessionKey={{Auth::user()->ticket_id}}"></object>
        @endauth
        @guest
             <object base="/flashclient/" height="480" width="772" data="/flashclient/Panfu.swf?iServer=http://localhost:8000/InformationServer/&langId=EN&mode=dev"></object>
        @endguest
    </div>
@endsection
