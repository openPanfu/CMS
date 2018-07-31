@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <object base="/flashclient/" height="480" width="772" data="/flashclient/Panfu.swf?iServer=http://localhost:8000/InformationServer/&langId=EN&mode=dev"></object>
    </div>
@endsection
