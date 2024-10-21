<header>
    <div class="row">
        <div class="col">
            <figure>
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo" width="50">
            </figure>
        </div>

        <div class="col">
            <ul>
                @foreach ($menuLinks as $element)
                <li>
                    <a href="#"> {{ $element['name'] }} </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
