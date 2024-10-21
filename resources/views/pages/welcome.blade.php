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
                            <img src=" {{ $element['thumb'] }} " alt=" {{ $element['title'] }} " width="250">
                        </figure>

                        <h4>
                            {{ $element['title'] }}
                        </h4>
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <div class="row">
                <ul>
                    @foreach ($itemsMenu as $item)
                        <li>
                            <figure>
                                <img src=" {{ Vite::asset('resources/images/' . $item['image']) }} " alt="">
                            </figure>
                            <span>
                                {{ $item['name'] }}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection