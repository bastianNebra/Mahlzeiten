@extends('layouts.app')
@section('content')

    @foreach($mahlzeitens as $mahlzeitens)

        <div id="content">

            <div class="menucontainer">
                <div id="datummahlzeit">{{ $mahlzeitens->date_tage }}</div>
                <div id="mahlzeitname" >{{ $mahlzeitens->name }}</div>
                <div ><button>Ja</button><button>Nein</button></div>
            </div>


        </div>
    @endforeach

@endsection
