@extends('layouts.app')
@section('content')

    <form id="content" method="POST" action="{{ route('mahlzeit') }}">
        @csrf
        <input type="date" id="start" name="date_tage" value="2018-07-22" min="2018-01-01" max="2018-12-31">
        <input type="text" id="name" name="name" required minlength="1" maxlength="8" size="10">
        <button>Buchen</button>
    </form>
@endsection
