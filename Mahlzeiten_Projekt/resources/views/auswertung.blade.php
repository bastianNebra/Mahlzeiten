@extends('layouts.app')
@section('content')
    <div id="content">

        @foreach($mahlzeitens as $mahlzeitens)

            <div id="content">

                <div class="menucontainer">
                    <div id="datummahlzeit">{{ $mahlzeitens->date_tage }}</div>
                    <div id="mahlzeitname" >{{ $mahlzeitens->name }}</div>
                    <div id="anzahl" >{{ $mahlzeitens->count }}</div>
                </div>


            </div>
        @endforeach


    </div>
@endsection
