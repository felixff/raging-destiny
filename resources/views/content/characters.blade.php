@extends('layouts.app')

@section('content')
    <div id="characters" class="content-section-style character-container">
        @foreach (File::glob(public_path('img/characters').'/*') as $path)
            <div class="character" onclick='Livewire.emit("openModal", "character-bio-modal")'>
                @if (strpos($path, 'bio') === false)
                    <img src="{{ str_replace(public_path(), '', $path) }}" alt="Character Image">
                @else
                    <img src="{{ str_replace(public_path(), '', $path) }}" alt="Character Bio" hidden>
                @endif
            </div>
        @endforeach
    </div>
    <style>
        .character-container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 60%;
            transition: box-shadow 0.4s ease-out;
        }

        .character {
            margin: 1em;
            position: relative;
            z-index: 4;
        }

        .character:hover {
            cursor: pointer;
            transform: scale(1.1);
            /*-webkit-box-shadow: 5px 5px 2.5px 0px rgba(66, 47, 66, 1);*/
            /*-moz-box-shadow: 5px 5px 2.5px 0px rgba(66, 47, 66, 1);*/
            /*box-shadow: 5px 5px 2.5px 0px rgba(66, 47, 66, 1);*/
            transition: transform 0.3s ease-in-out;
        }

        .character:before {

        }
    </style>
@endsection