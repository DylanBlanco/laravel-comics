<header>
    <div class="row">
        <div class="col-2">
            <figure>
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo" width="50">
            </figure>
        </div>

        <div class="col-10">
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
