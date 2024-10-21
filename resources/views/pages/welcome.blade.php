@extends('layouts.app')

@section('title', 'Dc Comics | Home')

@section('main')
    <main>
        <div>
            <h2>
                Current Series
            </h2>
            
            <div class="row">

                @foreach ($comics as $element)
                    <div class="col">
                        <figure>
                            <img src=" {{ $element['thumb'] }} " alt=" {{ $element['title'] }} ">
                        </figure>

                        <h4>
                            {{ $element['title'] }}
                        </h4>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
